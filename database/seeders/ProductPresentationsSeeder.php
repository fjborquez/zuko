<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductPresentationsSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('product_presentations')->count() == 0) {
            DB::table('product_presentations')->insert([
                ['id' => 1, 'description' => 'Grande'],
                ['id' => 2, 'description' => 'Picado'],
                ['id' => 3, 'description' => 'Granulado'],
                ['id' => 4, 'description' => 'Rallado'],
                ['id' => 5, 'description' => 'En cubos'],
                ['id' => 6, 'description' => 'Congelado'],
                ['id' => 7, 'description' => 'Artesanal'],
                ['id' => 8, 'description' => 'Kühne Sauerkraut'],
                ['id' => 9, 'description' => 'Molida'],
                ['id' => 10, 'description' => 'Fetuccine'],
                ['id' => 11, 'description' => 'En polvo'],
                ['id' => 12, 'description' => 'Deshidratadas'],
                ['id' => 13, 'description' => 'En láminas'],
                ['id' => 14, 'description' => 'Tostado'],
                ['id' => 15, 'description' => 'sutiles'],
                ['id' => 16, 'description' => 'sin polvos'],
                ['id' => 17, 'description' => 'cernida'],
                ['id' => 18, 'description' => 'Arborio'],
                ['id' => 19, 'description' => 'picado fino'],
                ['id' => 20, 'description' => 'deshuesadas'],
                ['id' => 21, 'description' => 'pequeña'],
                ['id' => 22, 'description' => 'desmenuzado'],
                ['id' => 23, 'description' => 'En rodajas'],
                ['id' => 24, 'description' => 'Rojo'],
                ['id' => 25, 'description' => 'asada'],
                ['id' => 26, 'description' => 'medianas'],
                ['id' => 27, 'description' => 'en palitos'],
                ['id' => 28, 'description' => 'seca'],
                ['id' => 29, 'description' => 'extra virgen'],
                ['id' => 30, 'description' => 'madura'],
                ['id' => 31, 'description' => 'Botella'],
                ['id' => 32, 'description' => 'fritas'],
                ['id' => 33, 'description' => 'maduros'],
            ]);
        }
    }
}
