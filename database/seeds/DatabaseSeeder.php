<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RoleSeeder::class);
        $this->call(UserSeeder::class);
        $this->call(StoreSeeder::class);
        $this->call(PaymentCategorySeeder::class);
        $this->call(PaymentSeeder::class);
        $this->call(ProductCategorySeeder::class);
        $this->call(ProductTypeSeeder::class);
        $this->call(ProductSeeder::class);
    }
}
