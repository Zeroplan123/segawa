<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Category::factory(5)->create();

        // Category::create([
        //     'name' => 'Technology',
        //     'slug' => 'technology',
        // ]);

        // Category::create([
        //     'name' => 'Health',
        //     'slug' => 'health',
        // ]);

        // Category::create([
        //     'name' => 'Travel',
        //     'slug' => 'travel',
        // ]);

        // Category::create([
        //     'name' => 'Food',
        //     'slug' => 'food',
        // ]);

        Category::factory(50)->create();
    }
}
