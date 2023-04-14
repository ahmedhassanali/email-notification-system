<?php

namespace Database\Seeders;

use App\Models\Customer;
use App\Models\Subscription;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SubscriptionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $subscriptions = [
            [
                'customer_id' => 1,
                'start_date' => now(),
                'expire_date' => now()->addDays(1),
            ],
            [
                'customer_id' => 2,
                'start_date' => now(),
                'expire_date' => now()->addDays(2),
            ],
        ];

        foreach ($subscriptions as $subscriptionData) {
            $customer = Customer::find($subscriptionData['customer_id']);

            Subscription::create([
                'customer_id' => $customer->id,
                'start_date' => $subscriptionData['start_date'],
                'expire_date' => $subscriptionData['expire_date'],
            ]);
        }
    }
}
