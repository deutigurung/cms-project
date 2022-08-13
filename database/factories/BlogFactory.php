<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->name(),
            'slug' => Str::slug($this->faker->name()),
            'content' => $this->faker->sentence(500),
            'image' => 'img-1.jpg',
            'status' => 1,
            'tags' => 'blog',
            'blog_category_id' => random_int(1,6),
        ];
    }
}
