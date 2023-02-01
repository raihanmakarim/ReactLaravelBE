<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        Customer::factory()
        ->count(30)
        ->hasInvoices(10)
        ->create();

        Customer::factory()
        ->count(100)
        ->hasInvoices(5)
        ->create();

        Customer::factory()
        ->count(150)
        ->hasInvoices(2)
        ->create();

        Customer::factory()
            ->count(200)
            ->create();
    }
}
