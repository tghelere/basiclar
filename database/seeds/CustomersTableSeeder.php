<?php

use Charlie\Customer;
use Illuminate\Database\Seeder;


class CustomersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Customer::truncate();
        factory(Customer::class, 50)->create();
    }
}
