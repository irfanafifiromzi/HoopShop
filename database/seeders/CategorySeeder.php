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
        Category::create([
            'name'=> 'Ball',
            'slug'=> 'nike'
        ]);

        Category::create([
            'name'=> 'Jersey',
            'slug'=> 'adidas'
        ]);

        Category::create([
            'name'=> 'Shoe',
            'slug'=> 'lining'
        ]);
    }
}
