<?php

use Illuminate\Database\Seeder;

class StoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('stores')->insert([
            
            [
                'user_id' => 1,
                'name' => 'Chendand Store',
                'picture' => '-'
            ],

            [
                'user_id' => 2,
                'name' => 'Vin Store',
                'picture' => '-'
            ],

            [
                'user_id' => 3,
                'name' => 'Jess Jess Store',
                'picture' => '-'
            ],

            [
                'user_id' => 4,
                'name' => 'Mellaini Store',
                'picture' => '-'
            ],

            [
                'user_id' => 5,
                'name' => 'Zasura Store',
                'picture' => '-'
            ],

            [
                'user_id' => 6,
                'name' => 'Son Nel Store',
                'picture' => '-'
            ],

        ]);
    }
}
