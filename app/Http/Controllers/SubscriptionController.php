<?php

namespace App\Http\Controllers;

use App\Models\Subscription;
use App\Notifications\SubscriptionEndingSoon;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    public function index()
    {
        // $subscriptions = Subscription::expiresToday()->get();
        // foreach ($subscriptions as $subscription) {
            // dd($subscription->customer->name);
            // $customer = $subscription->customer;
            // $customer->notify(new SubscriptionEndingSoon($subscription));
        // }
    }
}
