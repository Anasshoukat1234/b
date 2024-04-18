<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Book;
use App\Models\Author;
use App\Models\Category;
use App\Models\Review;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Author::factory(20)->create();
        Category::factory(10)->create();
        // Book::factory()->create();
        Review::factory(20)->create();
    }
}
