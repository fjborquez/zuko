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
                ['id' => 1, 'description' => 'Sliced'],
                ['id' => 2, 'description' => 'Grated'],
                ['id' => 3, 'description' => 'Shredded'],
                ['id' => 4, 'description' => 'Block'],
                ['id' => 5, 'description' => 'Diced'],
                ['id' => 6, 'description' => 'Chopped'],
                ['id' => 7, 'description' => 'Halved'],
                ['id' => 8, 'description' => 'Whole'],
                ['id' => 9, 'description' => 'Liquid'],
                ['id' => 10, 'description' => 'Powder'],
                ['id' => 11, 'description' => 'Frozen'],
                ['id' => 12, 'description' => 'Fresh'],
                ['id' => 13, 'description' => 'Dried'],
                ['id' => 14, 'description' => 'Canned'],
                ['id' => 15, 'description' => 'Bottled'],
                ['id' => 16, 'description' => 'Boxed'],
                ['id' => 17, 'description' => 'Packaged'],
                ['id' => 18, 'description' => 'Loose'],
                ['id' => 19, 'description' => 'Bagged'],
                ['id' => 20, 'description' => 'Ground'],
                ['id' => 21, 'description' => 'Paste'],
                ['id' => 22, 'description' => 'Jarred'],
                ['id' => 23, 'description' => 'Tub'],
                ['id' => 24, 'description' => 'Solid'],
                ['id' => 25, 'description' => 'Creamy'],
                ['id' => 26, 'description' => 'Fermented'],
                ['id' => 27, 'description' => 'Sparkling'],
                ['id' => 28, 'description' => 'Still'],
                ['id' => 29, 'description' => 'Roasted'],
                ['id' => 30, 'description' => 'Salted'],
                ['id' => 31, 'description' => 'Unsalted'],
                ['id' => 32, 'description' => 'Smoked'],
                ['id' => 33, 'description' => 'Natural'],
                ['id' => 34, 'description' => 'Organic'],
                ['id' => 35, 'description' => 'Gluten-Free'],
                ['id' => 36, 'description' => 'Low-Fat'],
                ['id' => 37, 'description' => 'Fat-Free'],
                ['id' => 38, 'description' => 'Wholegrain'],
                ['id' => 39, 'description' => 'Refined'],
                ['id' => 40, 'description' => 'Unrefined'],
                ['id' => 41, 'description' => 'Crunchy'],
                ['id' => 42, 'description' => 'Cream-Cheese'],
                ['id' => 43, 'description' => 'Sliced Turkey Ham'],
                ['id' => 44, 'description' => 'Wheat Flour Bag'],
                ['id' => 45, 'description' => 'Condensed Can'],
                ['id' => 46, 'description' => 'Multigrain Sliced'],
                ['id' => 47, 'description' => 'Long Baguette'],
                ['id' => 48, 'description' => 'Hard Boiled'],
                ['id' => 49, 'description' => 'Greek Yogurt'],
                ['id' => 50, 'description' => 'Skimmed'],
                ['id' => 51, 'description' => 'Full-Cream'],
                ['id' => 52, 'description' => 'Cultured'],
                ['id' => 53, 'description' => 'With Added Fruits'],
                ['id' => 54, 'description' => 'Organic Bananas'],
                ['id' => 55, 'description' => 'Baby Carrots'],
                ['id' => 56, 'description' => 'Red Tomatoes'],
                ['id' => 57, 'description' => 'Olive Oil Extra Virgin'],
                ['id' => 58, 'description' => 'Cold-Pressed'],
                ['id' => 59, 'description' => 'Margarine Tub'],
                ['id' => 60, 'description' => 'Salted Butter'],
                ['id' => 61, 'description' => 'Chocolate Chip'],
                ['id' => 62, 'description' => 'Salty Crackers'],
                ['id' => 63, 'description' => 'Angus Beef'],
                ['id' => 64, 'description' => 'Free-Range Chicken'],
                ['id' => 65, 'description' => 'Extra Firm Tofu'],
                ['id' => 66, 'description' => 'Alkaline Water'],
                ['id' => 67, 'description' => 'Toasted Almonds'],
                ['id' => 68, 'description' => 'Unsweetened Almond Milk'],
                ['id' => 69, 'description' => 'Low-Sugar Juice'],
                ['id' => 70, 'description' => 'French Roast Coffee'],
                ['id' => 71, 'description' => 'Herbal Assortment'],
                ['id' => 72, 'description' => 'Loose Leaf'],
                ['id' => 73, 'description' => 'Canned Grape Juice'],
                ['id' => 74, 'description' => 'Basmati Long-Grain'],
                ['id' => 75, 'description' => 'Parboiled Rice'],
                ['id' => 76, 'description' => 'Instant Quinoa'],
                ['id' => 77, 'description' => 'Moroccan Couscous'],
                ['id' => 78, 'description' => 'Sunflower Oil Pure'],
                ['id' => 79, 'description' => 'Red Lentils'],
                ['id' => 80, 'description' => 'Linguini'],
                ['id' => 81, 'description' => 'Wholewheat Pasta'],
                ['id' => 82, 'description' => 'Gnocchi'],
                ['id' => 83, 'description' => 'Egg Noodles'],
                ['id' => 84, 'description' => 'Crushed Tomato Sauce'],
                ['id' => 85, 'description' => 'Light Mayonnaise'],
                ['id' => 86, 'description' => 'Spicy Mustard'],
                ['id' => 87, 'description' => 'Chipotle Ketchup'],
                ['id' => 88, 'description' => 'Fig Jam'],
                ['id' => 89, 'description' => 'Nut Butter Assortment'],
                ['id' => 90, 'description' => 'Smoked Almonds'],
                ['id' => 91, 'description' => 'Cocoa Butter'],
                ['id' => 92, 'description' => 'Rice Cakes'],
                ['id' => 93, 'description' => 'Vanilla Gelato'],
                ['id' => 94, 'description' => 'Coconut Sorbet'],
                ['id' => 95, 'description' => 'Mineral Sparkle'],
                ['id' => 96, 'description' => 'Chardonnay'],
                ['id' => 97, 'description' => 'Sauvignon Blanc'],
                ['id' => 98, 'description' => 'Merlot'],
                ['id' => 99, 'description' => 'Cabernet Sauvignon'],
                ['id' => 100, 'description' => 'Rosé Wine'],
                ['id' => 101, 'description' => 'Glass'],
                ['id' => 102, 'description' => 'Pitcher'],
                ['id' => 103, 'description' => 'Keg'],
                ['id' => 104, 'description' => 'Miniature'],
            ]);
        }
    }
}
