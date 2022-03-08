<?php

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            
            [
                'role_id' => 2,
                'username' => 'andrschn',
                'name' => 'Andreas Chendra',
                'email' => 'andreas.chendra15@gmail.com',
                'password' => bcrypt('andreas123'),
                'phone' => '081236988569',
                'gender' => 'male',
                'picture' => 'images/user/profile/profile.png',
                'verif_idcard' => '-',
                'selfie_idcard' => '-'
            ],

            [
                'role_id' => 2,
                'username' => 'kvnrivaldo',
                'name' => 'Kevin Rivaldo',
                'email' => 'kevin.rivaldo@gmail.com',
                'password' => bcrypt('kevin123'),
                'phone' => '085698234571',
                'gender' => 'male',
                'picture' => 'images/user/profile/profile.png',
                'verif_idcard' => '-',
                'selfie_idcard' => '-'
            ],

            [
                'role_id' => 2,
                'username' => 'jesayajes',
                'name' => 'Jesaya',
                'email' => 'jesaya@gmail.com',
                'password' => bcrypt('jesaya123'),
                'phone' => '081236547896',
                'gender' => 'male',
                'picture' => 'images/user/profile/profile.png',
                'verif_idcard' => '-',
                'selfie_idcard' => '-'
            ],

            [
                'role_id' => 2,
                'username' => 'jessmellaini',
                'name' => 'Jessica Mellaini',
                'email' => 'jessica.mellaini@gmail.com',
                'password' => bcrypt('jessica123'),
                'phone' => '085933625578',
                'gender' => 'female',
                'picture' => 'images/user/profile/profile.png',
                'verif_idcard' => '-',
                'selfie_idcard' => '-'
            ],

            [
                'role_id' => 2,
                'username' => 'albertzasura',
                'name' => 'Albert',
                'email' => 'albert@gmail.com',
                'password' => bcrypt('albert123'),
                'phone' => '089788574123',
                'gender' => 'male',
                'picture' => 'images/user/profile/profile.png',
                'verif_idcard' => '-',
                'selfie_idcard' => '-'
            ],

            [
                'role_id' => 2,
                'username' => 'rkynlsn',
                'name' => 'Ricky Nelson',
                'email' => 'ricky.nelson@gmail.com',
                'password' => bcrypt('ricky123'),
                'phone' => '089855667748',
                'gender' => 'male',
                'picture' => 'images/user/profile/profile.png',
                'verif_idcard' => '-',
                'selfie_idcard' => '-'
            ],

        ]);
    }
}
