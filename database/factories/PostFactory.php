<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;
use App\Models\Category; // <-- import Category model
use App\Models\User;
use Illuminate\Support\Str;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
    $title = $this->faker->sentence();

    return [
        'title' => $title,
        'slug' => Str::slug($title),
        'content' => $this->faker->paragraph(5),
        'image' => $this->faker->imageUrl(),
        'category_id' => Category::inRandomOrder()->first()->id, // <- now uses correct import
        'user_id' => User::inRandomOrder()->first()->id,
        'published_at' => $this->faker->optional()->dateTime(),
    ];
}

}
