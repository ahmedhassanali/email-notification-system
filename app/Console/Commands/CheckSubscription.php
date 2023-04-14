<?php

namespace App\Console\Commands;

use App\Models\Subscription;
use App\Notifications\SubscriptionEndingSoon;
use Illuminate\Console\Command;

class CheckSubscription extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'check-subscription';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $subscriptions = Subscription::expiresToday()->get();
        
        foreach ($subscriptions as $subscription) {
            $customer = $subscription->customer;
            $customer->notify(new SubscriptionEndingSoon($subscription));
        }
    }
}
