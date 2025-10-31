<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    public function run(): void
    {
        // Create some users
        User::factory()->create([
            'name' => 'Test User',
            'username'=> 'testuser',
            'email' => 'test@example.com',
            'password' => bcrypt('password123'),
        ]);

        // Create categories
        $categories = [
            'Technology',
            'Health',
            'Sports',
            'Science',
            'Politics',
            'Entertainment',
        ];

        foreach ($categories as $category) {
            Category::create(['name' => $category]);
        }

        // Create posts
        //Post::factory(100)->create();
    }
}
