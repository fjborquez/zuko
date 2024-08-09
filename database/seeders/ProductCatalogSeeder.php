<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCatalogSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('product_catalog')->count() == 0) {
            DB::table('product_catalog')->insert([
                ['id' => 1, 'category_id' => 1, 'brand_id' => 25, 'type_id' => 6, 'presentation_id' => 1],
                ['id' => 2, 'category_id' => 1, 'brand_id' => 25, 'type_id' => 7, 'presentation_id' => 46],
                ['id' => 3, 'category_id' => 1, 'brand_id' => 1, 'type_id' => 8, 'presentation_id' => 47],
                ['id' => 4, 'category_id' => 3, 'brand_id' => 3, 'type_id' => 1, 'presentation_id' => 4],
                ['id' => 5, 'category_id' => 4, 'brand_id' => 4, 'type_id' => 10, 'presentation_id' => 49],
                ['id' => 6, 'category_id' => 4, 'brand_id' => 11, 'type_id' => 11, 'presentation_id' => 50],
                ['id' => 7, 'category_id' => 5, 'brand_id' => 5, 'type_id' => 14, 'presentation_id' => 12],
                ['id' => 8, 'category_id' => 5, 'brand_id' => 5, 'type_id' => 16, 'presentation_id' => 12],
                ['id' => 9, 'category_id' => 5, 'brand_id' => 14, 'type_id' => 15, 'presentation_id' => 54],
                ['id' => 10, 'category_id' => 2, 'brand_id' => 2, 'type_id' => 29, 'presentation_id' => 4],
                ['id' => 11, 'category_id' => 2, 'brand_id' => 13, 'type_id' => 30, 'presentation_id' => 63],
                ['id' => 12, 'category_id' => 7, 'brand_id' => 7, 'type_id' => 21, 'presentation_id' => 57],
                ['id' => 13, 'category_id' => 7, 'brand_id' => 16, 'type_id' => 21, 'presentation_id' => 58],
                ['id' => 14, 'category_id' => 8, 'brand_id' => 8, 'type_id' => 53, 'presentation_id' => 80],
                ['id' => 15, 'category_id' => 8, 'brand_id' => 24, 'type_id' => 54, 'presentation_id' => 81],
                ['id' => 16, 'category_id' => 9, 'brand_id' => 9, 'type_id' => 65, 'presentation_id' => 84],
                ['id' => 17, 'category_id' => 10, 'brand_id' => 10, 'type_id' => 48, 'presentation_id' => 14],
                ['id' => 18, 'category_id' => 11, 'brand_id' => 12, 'type_id' => 42, 'presentation_id' => 69],
                ['id' => 19, 'category_id' => 12, 'brand_id' => 19, 'type_id' => 45, 'presentation_id' => 73],
                ['id' => 20, 'category_id' => 6, 'brand_id' => 15, 'type_id' => 4, 'presentation_id' => 42],
                ['id' => 21, 'category_id' => 1, 'brand_id' => 1, 'type_id' => 6, 'presentation_id' => 1],
                ['id' => 22, 'category_id' => 2, 'brand_id' => 17, 'type_id' => 31, 'presentation_id' => 64],
                ['id' => 23, 'category_id' => 3, 'brand_id' => 3, 'type_id' => 33, 'presentation_id' => 32],
                ['id' => 24, 'category_id' => 3, 'brand_id' => 26, 'type_id' => 34, 'presentation_id' => 4],
                ['id' => 25, 'category_id' => 4, 'brand_id' => 4, 'type_id' => 12, 'presentation_id' => 51],
                ['id' => 26, 'category_id' => 5, 'brand_id' => 27, 'type_id' => 18, 'presentation_id' => 56],
                ['id' => 27, 'category_id' => 5, 'brand_id' => 20, 'type_id' => 20, 'presentation_id' => 56],
                ['id' => 28, 'category_id' => 5, 'brand_id' => 14, 'type_id' => 19, 'presentation_id' => 12],
                ['id' => 29, 'category_id' => 6, 'brand_id' => 6, 'type_id' => 4, 'presentation_id' => 44],
                ['id' => 31, 'category_id' => 7, 'brand_id' => 30, 'type_id' => 22, 'presentation_id' => 78],
                ['id' => 32, 'category_id' => 8, 'brand_id' => 24, 'type_id' => 62, 'presentation_id' => 76],
                ['id' => 33, 'category_id' => 9, 'brand_id' => 23, 'type_id' => 68, 'presentation_id' => 85],
                ['id' => 34, 'category_id' => 10, 'brand_id' => 28, 'type_id' => 51, 'presentation_id' => 75],
                ['id' => 35, 'category_id' => 11, 'brand_id' => 31, 'type_id' => 41, 'presentation_id' => 66],
                ['id' => 36, 'category_id' => 12, 'brand_id' => 19, 'type_id' => 102, 'presentation_id' => 100],
                ['id' => 37, 'category_id' => 12, 'brand_id' => 36, 'type_id' => 104, 'presentation_id' => 101],
                ['id' => 39, 'category_id' => 11, 'brand_id' => 32, 'type_id' => 103, 'presentation_id' => 104],
                ['id' => 40, 'category_id' => 4, 'brand_id' => 11, 'type_id' => 25, 'presentation_id' => 60],
                ['id' => 41, 'category_id' => 3, 'brand_id' => 26, 'type_id' => 33, 'presentation_id' => 32],
                ['id' => 42, 'category_id' => 6, 'brand_id' => 15, 'type_id' => 4, 'presentation_id' => 38],
                ['id' => 43, 'category_id' => 7, 'brand_id' => 7, 'type_id' => 22, 'presentation_id' => 78],
                ['id' => 44, 'category_id' => 7, 'brand_id' => 16, 'type_id' => 21, 'presentation_id' => 57],
                ['id' => 45, 'category_id' => 10, 'brand_id' => 10, 'type_id' => 79, 'presentation_id' => 14],
                ['id' => 46, 'category_id' => 12, 'brand_id' => 33, 'type_id' => 102, 'presentation_id' => 100],
            ]);
        }
    }
}
