<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $customers = [
            [
                'name' => 'John Doe',
                'email' => 'engahmeedhassanali@gmail.com',
                'password' => bcrypt('secret'),
            ],
            [
                'name' => 'Jane Doe',
                'email' => 'ahmeedhassanali@outlock.com',
                'password' => bcrypt('secret'),
            ],
            // add more customers as needed
        ];

        foreach ($customers as $customerData) {
            Customer::create($customerData);
        }
    }
}
