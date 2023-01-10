<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Topic;
use Illuminate\Http\Request;

class CourseController extends Controller
{
   public function course()
   {
      $course = Course::with(['img'])->get();
      return $course;
   }

}
