<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Platform;
use App\Models\Series;
use App\Models\Topic;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $series = Series::with('img')->get()->random(6);
        $courses = Course::with(['img', 'author', 'review'])->get()->random(6);
        // return $courses;
        return view('welcome', ['series' => $series, 'courses' => $courses]);
    }

    public function multiple($type, $slug)
    {
        $allow = ['books', 'courses', 'topics', 'platforms', 'durations', 'levels', 'series'];
        if (!in_array($type, $allow)) {
            return abort(404);
        }

        // single book and course
        if ($type == 'books' || $type == 'courses') {
            $course = Course::where('slug', $slug)
                ->with(['img', 'topic', 'author', 'review', 'episod', 'series'])
                ->first();

            if (empty($course)) {
                return abort(404);
            }
            return view('course.single', ['course' => $course]);
        }

        // archive topics
        if ($type == 'topics') {
            $data = Course::with(['topic', 'author', 'review'])->whereRelation('topic', 'name', '>=', $slug)->paginate(12);
            if (empty($data)) {
                return abort(404);
            }
            return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
        }

        // archive platfroms
        if ($type == 'platforms') {
            $data = Course::with(['platform', 'author', 'review'])->whereRelation('platform', 'name', '>=', $slug)->paginate(12);
            if (empty($data)) {
                return abort(404);
            }
            return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
        }

        // archive series
        if ($type == 'series') {
            $data = Course::with(['series', 'author', 'review'])->whereRelation('series', 'name', '>=', $slug)->paginate(12);
            if (empty($data)) {
                return abort(404);
            }
            return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
        }

        // archive levels
        if ($type == 'levels') {
            if ($slug == 'beginner') {
                $data = Course::where('level', 0)->with(['series', 'author', 'review'])->paginate(12);
                return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
            } elseif ($slug == 'intermediate') {
                $data = Course::where('level', 1)->with(['series', 'author', 'review'])->paginate(12);
                return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
            } elseif ($slug == 'advanced') {
                $data = Course::where('level', 2)->with(['series', 'author', 'review'])->paginate(12);
                return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
            } else {
                return abort(404);
            }
        }

        // archive durations
        if ($type == 'durations') {
            if ($slug == '1-5-hours') {
                $data = Course::where('duration', 0)->with(['series', 'author', 'review'])->paginate(12);
                return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
            } elseif ($slug == '5-10-hours') {
                $data = Course::where('duration', 1)->with(['series', 'author', 'review'])->paginate(12);
                return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
            } elseif ($slug == '10-plus-hours') {
                $data = Course::where('duration', 2)->with(['series', 'author', 'review'])->paginate(12);
                return view('archive.index', ['data' => $data, 'title' => 'Courses on ' . $slug]);
            } else {
                return abort(404);
            }
        }
    }

    public function single(Request $request,$type)
    {
        $allow = ['books', 'courses'];
        if (!in_array($type, $allow)) {
            return abort(404);
        }
        $searsh = $request->searsh;
        $level = $request->level;
        $duration = $request->duration;
        $series = $request->series;
        $platform = $request->platform;

        // dd($request);

        $data = Course::Where('type', $type == 'books' ? 1 : 0)
        ->when($level, function($query) use ($level){
            foreach($level as $item){
                if($item == 'beginner'){
                    $query->Where('level', 0);
                }elseif($item == 'intermediate'){
                    $query->Where('level', 1);
                }elseif($item == 'advanced'){
                    $query->Where('level', 2);
                }
                return $query;
            }

        })->when($duration, function($query) use ($duration){
            foreach($duration as $item){
                if($item == 'beginner'){
                    $query->Where('level', 0);
                }elseif($item == 'intermediate'){
                    $query->Where('level', 1);
                }elseif($item == 'advanced'){
                    $query->Where('level', 2);
                }
                return $query;
            }

        })
        ->with(['review', 'author'])
        ->paginate(10);
        return view('course.archive', [
            'data' => $data, 
            'filters' => $this->filters(),
        ]);
    }

    // all filters value
    public function filters(){
        //level count
        $levelBeginner = Course::where('level', 0)->count();
        $levelIntermediate = Course::where('level', 1)->count();
        $levelAdvancedr = Course::where('level', 2)->count();

        //duration count
        $duration15 = Course::where('duration', 0)->count();
        $duration510 = Course::where('duration', 1)->count();
        $duration10 = Course::where('duration', 2)->count();

        //platforms
        $platforms = Platform::with('course')->get();

        //series
        $series = Series::with('course')->get();
        
        return [
            'levelBeginner' => $levelBeginner,
            'levelIntermediate' => $levelIntermediate,
            'levelAdvancedr' => $levelAdvancedr,
            'duration15' => $duration15,
            'duration510' => $duration510,
            'duration10' => $duration10,
            'platforms' => $platforms,
            'series' => $series,
        ];
    }
}
