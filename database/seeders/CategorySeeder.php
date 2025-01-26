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
        // Category::factory(3)->create();
        
        Category::create([
            'name' => 'Rhodes Island Archive',
            'slug' => 'rhodes-island-archive'
        ]);
        Category::create([
            'name' => 'Blue Archive',
            'slug' => 'blue-archive'
        ]);
        Category::create([
            'name' => 'Guardian Tales',
            'slug' => 'guardian-tales'
        ]);
        Category::create([
            'name' => 'Limbus Company',
            'slug' => 'limbus-company'
        ]);
    }
}
