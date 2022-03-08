<?php

use Illuminate\Database\Seeder;

class PaymentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert([
            
            [
                'paymentCategory_id' => '1',
                'name' => 'BCA'
            ],

            [
                'paymentCategory_id' => '1',
                'name' => 'BRI'
            ],

            [
                'paymentCategory_id' => '1',
                'name' => 'Mandiri'
            ],

            [
                'paymentCategory_id' => '2',
                'name' => 'Telkomsel'
            ],

            [
                'paymentCategory_id' => '2',
                'name' => 'XL'
            ],

            [
                'paymentCategory_id' => '2',
                'name' => 'Three'
            ],

            [
                'paymentCategory_id' => '2',
                'name' => 'Indosat Ooredoo'
            ],

            [
                'paymentCategory_id' => '3',
                'name' => 'OVO'
            ],

            [
                'paymentCategory_id' => '3',
                'name' => 'GOPAY'
            ],

            [
                'paymentCategory_id' => '3',
                'name' => 'Dana'
            ],

        ]);
    }
}
