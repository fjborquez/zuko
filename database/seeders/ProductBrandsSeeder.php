<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductBrandsSeeder extends Seeder
{
    public function run()
    {
        if (DB::table('product_brands')->count() == 0) {
            DB::table('product_brands')->insert([
                ['id' => 1, 'name' => 'Ideal', 'description' => 'Bakery products, especially bread.'],
                ['id' => 2, 'name' => 'Cecinas Winter', 'description' => 'Butchery products, sausages, and meats.'],
                ['id' => 3, 'name' => 'Colun', 'description' => 'Cheeses and cold cuts products.'],
                ['id' => 4, 'name' => 'Soprole', 'description' => 'Dairy products such as yogurts, milks, and desserts.'],
                ['id' => 5, 'name' => 'Hortifrut', 'description' => 'Fresh fruits and vegetables products.'],
                ['id' => 6, 'name' => 'Selecta', 'description' => 'Flours for baking and cooking.'],
                ['id' => 7, 'name' => 'Bonaventura', 'description' => 'Premium olive oils, salts, and condiments.'],
                ['id' => 8, 'name' => 'Lucchetti', 'description' => 'Pasta and related products.'],
                ['id' => 9, 'name' => 'Gourmet', 'description' => 'Sauces and dressings for culinary use.'],
                ['id' => 10, 'name' => 'Maggi', 'description' => 'Instant meals and soups.'],
                ['id' => 11, 'name' => 'Loncoleche', 'description' => 'Dairy products, including milk and cheese.'],
                ['id' => 12, 'name' => 'Watts', 'description' => 'Various food products, including juices and sauces.'],
                ['id' => 13, 'name' => 'Agrosuper', 'description' => 'Poultry, pork, and processed meat products.'],
                ['id' => 14, 'name' => 'Frutos de Lonquén', 'description' => 'Fresh and dried fruit products.'],
                ['id' => 15, 'name' => 'Molino La Estampa', 'description' => 'Various wheat flours.'],
                ['id' => 16, 'name' => 'Olibar', 'description' => 'Olive oils and gourmet products.'],
                ['id' => 17, 'name' => 'PF Alimentos', 'description' => 'Processed foods, meats, and ready meals.'],
                ['id' => 18, 'name' => 'Pancho Villa', 'description' => 'Mexican food products, including sauces and tortillas.'],
                ['id' => 19, 'name' => 'Viñedos Emiliana', 'description' => 'Organic wines and related products.'],
                ['id' => 20, 'name' => 'Conservas Deyco', 'description' => 'Canned fruits and vegetables.'],
                ['id' => 21, 'name' => 'La Preferida', 'description' => 'Diverse dairy and meat products.'],
                ['id' => 22, 'name' => 'Biggi', 'description' => 'Pasta products and sauces.'],
                ['id' => 23, 'name' => 'Hellmann\'s', 'description' => 'Sauces and dressings including mayonnaise.'],
                ['id' => 24, 'name' => 'Carozzi', 'description' => 'Pasta, rice, and other packaged foods.'],
                ['id' => 25, 'name' => 'Santa Isabel', 'description' => 'Brand for supermarket products, diverse categories.'],
                ['id' => 26, 'name' => 'Don Humberto', 'description' => 'Cheese and cured meats.'],
                ['id' => 27, 'name' => 'Las Doscientas', 'description' => 'Vegetables, particularly canned and preserved.'],
                ['id' => 28, 'name' => 'Alza', 'description' => 'Quality cereals and grains.'],
                ['id' => 29, 'name' => 'Aconcagua Foods', 'description' => 'Preserved vegetables and packaged fruit juices.'],
                ['id' => 30, 'name' => 'Dánica', 'description' => 'Oils and margarines.'],
                ['id' => 31, 'name' => 'Cachantún', 'description' => 'Chilean mineral water brand, well-known for its purity and mineral content.'],
                ['id' => 32, 'name' => 'Andina', 'description' => 'A major Chilean company producing soft drinks and bottled water, including brands like Coca-Cola.'],
                ['id' => 33, 'name' => 'Viña Concha y Toro', 'description' => 'One of Chile\'s largest wineries, renowned for a wide variety of wines including rosé.'],
                ['id' => 34, 'name' => 'Viña Santa Rita', 'description' => 'Chilean winery famous for its premium wine selection.'],
                ['id' => 35, 'name' => 'Aguas Manantial', 'description' => 'Offers a range of bottled water options across Chile.'],
                ['id' => 36, 'name' => 'Cervecería Kunstmann', 'description' => 'Known for its craft beers, offers a variety of artisanal brews.'],
            ]);
        }
    }
}
