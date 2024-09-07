<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('product_categories')->count() == 0) {
            DB::table('product_categories')->insert([
                ['id' => 1, 'name' => 'Bakery'],
                ['id' => 2, 'name' => 'Butchery'],
                ['id' => 3, 'name' => 'Cheeses and Cold Cuts'],
                ['id' => 4, 'name' => 'Dairy'],
                ['id' => 5, 'name' => 'Fruits and Vegetables'],
                ['id' => 6, 'name' => 'Flours'],
                ['id' => 7, 'name' => 'Oils, Salt, and Seasonings'],
                ['id' => 8, 'name' => 'Pasta'],
                ['id' => 9, 'name' => 'Sauces and Dressings'],
                ['id' => 10, 'name' => 'Instant and Soups'],
                ['id' => 11, 'name' => 'Beverages'],
                ['id' => 12, 'name' => 'Alcoholic Beverages'],
                ['id' => 13, 'name' => 'Frozen Foods'],
                ['id' => 14, 'name' => 'Sweeteners'],
                ['id' => 15, 'name' => 'Broths and Stocks'],
                ['id' => 16, 'name' => 'Cereals'],
                ['id' => 17, 'name' => 'Canned and Preserved'],
            ]);
        }
    }
}
