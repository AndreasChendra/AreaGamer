<?php

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            
            [
                'store_id' => 1,
                'productType_id' => 1,
                'productCategory_id' => 1,
                'name' => '57 Diamonds',
                'price' => '32000',
                'process' => 5,
                'total_sold' => 15,
                'description'=> 'GUYS READY DIAMOND MOBILE LEGENDS ✨ PROSES 5 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Jycho. ID : 123724663 SERVER : 2607',
                'picture' => 'images/games/product/moba/diamond-57.jpg',
            ],

            [
                'store_id' => 1,
                'productType_id' => 1,
                'productCategory_id' => 1,
                'name' => '172 Diamonds',
                'price' => '95000',
                'process' => 5,
                'total_sold' => 953,
                'description'=> 'GUYS READY DIAMOND MOBILE LEGENDS ✨ PROSES 5 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Jycho. ID : 123724663 SERVER : 2607',
                'picture' => 'images/games/product/moba/diamond-172.jpg',
            ],

            [
                'store_id' => 2,
                'productType_id' => 1,
                'productCategory_id' => 1,
                'name' => '344 Diamonds',
                'price' => '155000',
                'process' => 15,
                'total_sold' => 7,
                'description'=> 'GUYS READY DIAMOND MOBILE LEGENDS ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/moba/diamond-344.jpg',
            ],

            [
                'store_id' => 2,
                'productType_id' => 1,
                'productCategory_id' => 1,
                'name' => '514 Diamonds',
                'price' => '212500',
                'process' => 5,
                'total_sold' => 6572,
                'description'=> 'GUYS READY DIAMOND MOBILE LEGENDS ✨ PROSES 5 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/moba/diamond-514.jpg',
            ],

            [
                'store_id' => 1,
                'productType_id' => 1,
                'productCategory_id' => 1,
                'name' => '1830 Diamonds',
                'price' => '769000',
                'process' => 15,
                'total_sold' => 0,
                'description'=> 'GUYS READY DIAMOND MOBILE LEGENDS ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Jycho. ID : 123724663 SERVER : 2607',
                'picture' => 'images/games/product/moba/diamond-1830.jpg',
            ],

            [
                'store_id' => 2,
                'productType_id' => 1,
                'productCategory_id' => 1,
                'name' => '86 Diamonds',
                'price' => '65000',
                'process' => 15,
                'total_sold' => 969,
                'description'=> 'GUYS READY DIAMOND MOBILE LEGENDS ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/moba/diamond-86.jpg',
            ],

            [
                'store_id' => 2,
                'productType_id' => 1,
                'productCategory_id' => 2,
                'name' => '150 UC',
                'price' => '75000',
                'process' => 15,
                'total_sold' => 9,
                'description'=> 'GUYS READY UC PUBG MOBILE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/pubg/uc-150.png',
            ],

            [
                'store_id' => 1,
                'productType_id' => 1,
                'productCategory_id' => 2,
                'name' => '340 UC',
                'price' => '112000',
                'process' => 10,
                'total_sold' => 1123,
                'description'=> 'GUYS READY UC PUBG MOBILE ✨ PROSES 10 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/pubg/uc-340.jpg',
            ],

            [
                'store_id' => 1,
                'productType_id' => 1,
                'productCategory_id' => 2,
                'name' => '600 UC',
                'price' => '189000',
                'process' => 15,
                'total_sold' => 6,
                'description'=> 'GUYS READY UC PUBG MOBILE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/pubg/uc-600.jpg',
            ],

            [
                'store_id' => 2,
                'productType_id' => 1,
                'productCategory_id' => 2,
                'name' => '690 UC',
                'price' => '226000',
                'process' => 15,
                'total_sold' => 1969,
                'description'=> 'GUYS READY UC PUBG MOBILE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/pubg/uc-690.jpg',
            ],

            [
                'store_id' => 3,
                'productType_id' => 1,
                'productCategory_id' => 2,
                'name' => '1300 UC',
                'price' => '555000',
                'process' => 15,
                'total_sold' => 6969,
                'description'=> 'GUYS READY UC PUBG MOBILE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/pubg/uc-1300.jpg',
            ],

            [
                'store_id' => 3,
                'productType_id' => 1,
                'productCategory_id' => 2,
                'name' => '1875 UC',
                'price' => '969000',
                'process' => 15,
                'total_sold' => 562,
                'description'=> 'GUYS READY UC PUBG MOBILE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/pubg/uc-1875.png',
            ],

            [
                'store_id' => 3,
                'productType_id' => 1,
                'productCategory_id' => 3,
                'name' => '45 Diamond',
                'price' => '50000',
                'process' => 15,
                'total_sold' => 112,
                'description'=> 'GUYS READY DIAMOND FREE FIRE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/free-fire/diamond-45.jpg',
            ],

            [
                'store_id' => 3,
                'productType_id' => 1,
                'productCategory_id' => 3,
                'name' => '210 Diamond',
                'price' => '150000',
                'process' => 15,
                'total_sold' => 11,
                'description'=> 'GUYS READY DIAMOND FREE FIRE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/free-fire/diamond-210.jpg',
            ],

            [
                'store_id' => 4,
                'productType_id' => 1,
                'productCategory_id' => 3,
                'name' => '355 Diamond',
                'price' => '179000',
                'process' => 15,
                'total_sold' => 69,
                'description'=> 'GUYS READY DIAMOND FREE FIRE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/free-fire/diamond-355.jpg',
            ],

            [
                'store_id' => 4,
                'productType_id' => 1,
                'productCategory_id' => 3,
                'name' => '545 Diamond',
                'price' => '369000',
                'process' => 15,
                'total_sold' => 111,
                'description'=> 'GUYS READY DIAMOND FREE FIRE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/free-fire/diamond-545.jpg',
            ],

            [
                'store_id' => 5,
                'productType_id' => 1,
                'productCategory_id' => 3,
                'name' => '925 Diamond',
                'price' => '969000',
                'process' => 15,
                'total_sold' => 1111,
                'description'=> 'GUYS READY DIAMOND FREE FIRE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/free-fire/diamond-925.jpg',
            ],

            [
                'store_id' => 5,
                'productType_id' => 1,
                'productCategory_id' => 3,
                'name' => '2000 Diamond',
                'price' => '1562000',
                'process' => 15,
                'total_sold' => 99,
                'description'=> 'GUYS READY DIAMOND FREE FIRE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/free-fire/diamond-2000.jpg',
            ],

            [
                'store_id' => 6,
                'productType_id' => 2,
                'productCategory_id' => 4,
                'name' => '650 Valorant Point',
                'price' => '325000',
                'process' => 15,
                'total_sold' => 333,
                'description'=> 'GUYS READY VALORANT POINT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/valorant/vp-650.png',
            ],

            [
                'store_id' => 6,
                'productType_id' => 2,
                'productCategory_id' => 4,
                'name' => '700 Valorant Point',
                'price' => '429000',
                'process' => 15,
                'total_sold' => 996,
                'description'=> 'GUYS READY RADIANT POINT VALORANT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/valorant/vp-700.jpg',
            ],

            [
                'store_id' => 3,
                'productType_id' => 2,
                'productCategory_id' => 4,
                'name' => '2100 Valorant Point',
                'price' => '765000',
                'process' => 15,
                'total_sold' => 3339,
                'description'=> 'GUYS READY VALORANT POINT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/valorant/vp-2100.jpg',
            ],

            [
                'store_id' => 3,
                'productType_id' => 2,
                'productCategory_id' => 4,
                'name' => '4375 Valorant Point',
                'price' => '325000',
                'process' => 15,
                'total_sold' => 4444,
                'description'=> 'GUYS READY VALORANT POINT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/valorant/vp-4375.jpg',
            ],

            [
                'store_id' => 1,
                'productType_id' => 2,
                'productCategory_id' => 4,
                'name' => '7100 Valorant Point',
                'price' => '896000',
                'process' => 15,
                'total_sold' => 2201,
                'description'=> 'GUYS READY VALORANT POINT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/valorant/vp-7100.jpg',
            ],

            [
                'store_id' => 2,
                'productType_id' => 2,
                'productCategory_id' => 4,
                'name' => '8150 Valorant Point',
                'price' => '896000',
                'process' => 15,
                'total_sold' => 2912,
                'description'=> 'GUYS READY VALORANT POINT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/valorant/vp-8150.jpg',
            ],

            [
                'store_id' => 4,
                'productType_id' => 2,
                'productCategory_id' => 5,
                'name' => '300 G Crystals',
                'price' => '265000',
                'process' => 15,
                'total_sold' => 0,
                'description'=> 'GUYS READY GENESIS CRYSTALS GENSHIN IMPACT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/genshin/gc-300.jpg',
            ],

            [
                'store_id' => 4,
                'productType_id' => 2,
                'productCategory_id' => 5,
                'name' => '980 G Crystals',
                'price' => '599000',
                'process' => 15,
                'total_sold' => 1,
                'description'=> 'GUYS READY GENESIS CRYSTALS GENSHIN IMPACT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/genshin/gc-980.jpg',
            ],

            [
                'store_id' => 5,
                'productType_id' => 2,
                'productCategory_id' => 5,
                'name' => '1980 G Crystals',
                'price' => '856000',
                'process' => 15,
                'total_sold' => 106,
                'description'=> 'GUYS READY GENESIS CRYSTALS GENSHIN IMPACT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/genshin/gc-1980.jpg',
            ],

            [
                'store_id' => 6,
                'productType_id' => 2,
                'productCategory_id' => 5,
                'name' => '2240 G Crystals',
                'price' => '875000',
                'process' => 15,
                'total_sold' => 389,
                'description'=> 'GUYS READY GENESIS CRYSTALS GENSHIN IMPACT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/genshin/gc-2240.jpg',
            ],

            [
                'store_id' => 5,
                'productType_id' => 2,
                'productCategory_id' => 5,
                'name' => '3280 G Crystals',
                'price' => '993000',
                'process' => 15,
                'total_sold' => 1064,
                'description'=> 'GUYS READY GENESIS CRYSTALS GENSHIN IMPACT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/genshin/gc-3280.jpg',
            ],

            [
                'store_id' => 6,
                'productType_id' => 2,
                'productCategory_id' => 5,
                'name' => '6480 G Crystals',
                'price' => '1293000',
                'process' => 15,
                'total_sold' => 323,
                'description'=> 'GUYS READY GENESIS CRYSTALS GENSHIN IMPACT ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/genshin/gc-6480.jpg',
            ],

            [
                'store_id' => 6,
                'productType_id' => 2,
                'productCategory_id' => 6,
                'name' => '800 V Bucks',
                'price' => '405000',
                'process' => 15,
                'total_sold' => 777,
                'description'=> 'GUYS READY V BUCKS FORTNITE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/fortnite/vb-800.png',
            ],

            [
                'store_id' => 6,
                'productType_id' => 2,
                'productCategory_id' => 6,
                'name' => '1000 V Bucks',
                'price' => '705000',
                'process' => 15,
                'total_sold' => 8888,
                'description'=> 'GUYS READY V BUCKS FORTNITE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/fortnite/vb-1000.jpg',
            ],

            [
                'store_id' => 5,
                'productType_id' => 2,
                'productCategory_id' => 6,
                'name' => '2800 V Bucks',
                'price' => '1205000',
                'process' => 15,
                'total_sold' => 88,
                'description'=> 'GUYS READY V BUCKS FORTNITE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/fortnite/vb-2800.jpg',
            ],

            [
                'store_id' => 5,
                'productType_id' => 2,
                'productCategory_id' => 6,
                'name' => '5000 V Bucks',
                'price' => '1505000',
                'process' => 15,
                'total_sold' => 789,
                'description'=> 'GUYS READY V BUCKS FORTNITE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/fortnite/vb-5000.jpg',
            ],

            [
                'store_id' => 4,
                'productType_id' => 2,
                'productCategory_id' => 6,
                'name' => '10000 V Bucks',
                'price' => '2005000',
                'process' => 15,
                'total_sold' => 634,
                'description'=> 'GUYS READY V BUCKS FORTNITE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/fortnite/vb-10000.jpg',
            ],

            [
                'store_id' => 4,
                'productType_id' => 2,
                'productCategory_id' => 6,
                'name' => '13500 V Bucks',
                'price' => '2195000',
                'process' => 15,
                'total_sold' => 5555,
                'description'=> 'GUYS READY V BUCKS FORTNITE ✨ PROSES 15 MENIT MAX 1 JAM YAA. ⛔️PASTIKAN MEMBERIKAN DATA YANG BENAR DAN SESUAI⛔️ Untuk fix order silahkan isi pada note yang sudah diberikan dengan format di bawah ini : NICK : Luminaire ID : 99685742 SERVER : 2000',
                'picture' => 'images/games/product/fortnite/vb-13500.jpg',
            ],

        ]);
    }
}
