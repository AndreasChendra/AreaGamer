<?php

use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('product_categories')->insert([
            
            [
                'name' => 'Mobile Legend',
                'picture' => 'images/games/moba.jpg'
            ],

            [
                'name' => 'PUBG Mobile',
                'picture' => 'images/games/pubg.png'
            ],

            [
                'name' => 'Free Fire',
                'picture' => 'images/games/free-fire.png'
            ],

            [
                'name' => 'Valorant',
                'picture' => 'images/games/valorant.jpeg'
            ],

            [
                'name' => 'Genshin Impact',
                'picture' => 'images/games/genshin.jpeg'
            ],

            [
                'name' => 'Fortnite',
                'picture' => 'images/games/fortnite.jpeg'
            ],

        ]);
    }
}
