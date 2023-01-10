<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Author;
use App\Models\Course;
use App\Models\Episod;
use App\Models\Img;
use App\Models\Platform;
use App\Models\Review;
use App\Models\Series;
use App\Models\Topic;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(20)->create();

        User::factory()->create([
            'name' => 'rahmat mondol',
            'email' => 'admin@admin.com',
            'password' => bcrypt('123456789')
        ]);


        Img::factory(50)->create();


        //create seed topics
        $topics = [
            'Eloquent',
            'Validation',
            'Testing',
            'Collections',
            'Controllers',
            'DDD',
            'DTO',
            'Refactoring',
            'View Model',
            'Actions'
        ];

        foreach ($topics as $topic) {
            Topic::create([
                'name' => $topic,
                'slug' => Str::slug($topic),
                'img_id' => Img::get()->random()->id
            ]);
        }

        //create seed platform
        $platform = ['Laracasts', 'Laravel Daily', 'Codecourse', 'Spatie'];
        foreach ($platform as $itm) {
            Platform::create([
                'name' => $itm,
                'slug' => Str::slug($itm),
                'img_id' => Img::get()->random()->id
            ]);
        }


        //create seed Series

        $series = ['Laravel', 'PHP', 'Livewire', 'Vue.js', 'Alpine.js', 'Tailwind CSS'];
        foreach ($series as $itm) {
            Series::create([
                'name' => $itm,
                'slug' => Str::slug($itm),
                'img_id' => Img::get()->random()->id
            ]);
        }

        //create authors
        Author::factory(10)->create();


        //create episod
        Episod::factory(100)->create();

        //create review
        Review::factory(100)->create();

        //create course
        Course::factory(100)->create();
        $courses = Course::all();
        foreach ($courses as $course) {
            $course->author()->attach(Author::all()->random(rand(1, 2))->pluck('id'));
            $course->topic()->attach(Topic::all()->random(rand(0, 10))->pluck('id'));
            $course->episod()->attach(Episod::all()->random(rand(5, 20))->pluck('id'));
            $course->review()->attach(Review::all()->random(rand(0, 10))->pluck('id'));
        }
    }
}
