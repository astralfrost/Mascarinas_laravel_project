<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Task;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $categories = Category::factory()->count(5)->create();

        foreach ($categories as $category) {
            Task::factory()->count(3)->create([
                'category_id' => $category->id,
            ]);
        }
    }
}
