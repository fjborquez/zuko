<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call(ProductCategoriesSeeder::class);
        $this->call(ProductBrandsSeeder::class);
        $this->call(ProductTypesSeeder::class);
        $this->call(ProductPresentationsSeeder::class);
        $this->call(ProductCatalogSeeder::class);
    }
}
