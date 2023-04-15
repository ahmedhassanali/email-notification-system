<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    use HasFactory;
    protected $fillable = ['customer_id', 'start_date', 'expire_date'];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function scopeExpiresToday($query)
    {
        return $query->where('expire_date', '<=', Carbon::now()->addDay());
    }
}
