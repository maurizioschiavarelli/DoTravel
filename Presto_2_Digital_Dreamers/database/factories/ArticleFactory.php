<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'=>fake()->sentence(3),
            'description'=>fake()->text(100),
            'price'=>rand(1,1000),
            'user_id'=>rand(1,40),
            'category_id'=>rand(1,10),
            'is_accepted'=>true
        ];
    }
}
