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
                'name' => 'BCA',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '5271955569',
                'picture' => 'images/payment/bank/bca.png'
            ],

            [
                'paymentCategory_id' => '1',
                'name' => 'BNI',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '6359324576',
                'picture' => 'images/payment/bank/bni.png'
            ],

            [
                'paymentCategory_id' => '1',
                'name' => 'Mandiri',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '9635472513258',
                'picture' => 'images/payment/bank/mandiri.png'
            ],

            [
                'paymentCategory_id' => '2',
                'name' => 'Telkomsel',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '082295634882',
                'picture' => 'images/payment/pulsa/as.png'
            ],

            [
                'paymentCategory_id' => '2',
                'name' => 'XL',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '081807070675',
                'picture' => 'images/payment/pulsa/xl.png'
            ],

            [
                'paymentCategory_id' => '2',
                'name' => 'Tri',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '089524567395',
                'picture' => 'images/payment/pulsa/tri.png'
            ],

            [
                'paymentCategory_id' => '3',
                'name' => 'OVO',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '082295634882',
                'picture' => 'images/payment/e-wallet/ovo.png'
            ],

            [
                'paymentCategory_id' => '3',
                'name' => 'GOPAY',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '082295634882',
                'picture' => 'images/payment/e-wallet/gopay.png'
            ],

            [
                'paymentCategory_id' => '3',
                'name' => 'Dana',
                'pay_name' => 'PT. Area Gamer Technology Tbk',
                'pay_number' => '082295634882',
                'picture' => 'images/payment/e-wallet/dana.png'
            ],

        ]);
    }
}
