<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    protected $blog = Blog::class;

    public function definition(): array
    {
        // Fakerの日本語ロケールを設定
        $faker = \Faker\Factory::create('ja_JP');
        return [
            'title' => $this->faker->word,
            'content' => $this->faker->realText,
        ];
    }
}
