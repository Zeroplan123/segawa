<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use PDO;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(),
            'slug'  => $this->faker->slug(),
           'author_id' =>User::factory(),
           'category_id' =>Category ::factory(),
            'body'  => $this->faker->realTextBetween(600, 1600),
            'img'   => $this->faker->imageUrl(640, 480, 'animals', true)
        ];
    }

    public function withCategories($min = 1, $max = 3)
    {
        return $this->afterCreating(function (post $post) use ($min, $max){
            $count = rand($min, $max);
            $categories = Category::inRandomOrder()->take($count)->pluck('id');
            $post->categories()->attach($categories);
        });
    }
}
