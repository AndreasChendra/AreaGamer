<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

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
                'picture' => 'images/store/profile/chendand_store.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 2,
                'name' => 'Vin Store',
                'picture' => '-',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 3,
                'name' => 'Jess Jess Store',
                'picture' => '-',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 4,
                'name' => 'Mellaini Store',
                'picture' => '-',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 5,
                'name' => 'Zasura Store',
                'picture' => '-',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

            [
                'user_id' => 6,
                'name' => 'Son Nel Store',
                'picture' => '-',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],

        ]);
    }
}
