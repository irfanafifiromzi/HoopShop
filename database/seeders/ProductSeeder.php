<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'title'=> 'Way of Wade 10',
            'price'=> 499.00,
            'quantity'=> 3,
            'category_id'=> 3,
            'brand_id'=> 3,
            'description'=> 'The special edition WOW10'

        ]);
    }

}
