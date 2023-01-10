<?php

namespace Database\Factories;

use App\Models\Img;
use App\Models\Platform;
use App\Models\Series;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence();
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'video' => rand(1, 30),
            'book' => rand(0, 5),
            'level' => rand(0, 2),
            'duration' => rand(0, 2),
            'type' => rand(0, 2),
            'year' => rand(2016, 2022),
            'sort_description' => fake()->paragraph(1),
            'description' => fake()->paragraph(4),
            'price' => rand(0.00, 50.00),

            'series_id' => Series::get()->random()->id,
            'submited_by' => User::get()->random()->id,
            'platform_id' => Platform::get()->random()->id,
            'img_id' => Img::get()->random()->id,
        ];
    }
}
