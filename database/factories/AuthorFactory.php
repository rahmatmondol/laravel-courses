<?php

namespace Database\Factories;

use App\Models\Img;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Author>
 */
class AuthorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->name(),
            'bio' => fake()->paragraph(3),
            'twitter_url' => fake()->url(),
            'github_url' => fake()->url(),
            'website_url' => fake()->url(),

            'user_id' => User::get()->random()->id,
            'img_id' => Img::get()->random()->id,
        ];
    }
}
