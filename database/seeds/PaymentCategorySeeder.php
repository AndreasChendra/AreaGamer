<?php

use Illuminate\Database\Seeder;

class PaymentCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_categories')->insert([
            
            [
                'name' => 'Banking'
            ],

            [
                'name' => 'Pulsa'
            ],

            [
                'name' => 'E-Money'
            ],

        ]);
    }
}
