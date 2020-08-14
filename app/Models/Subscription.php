<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
    //
    protected $table = "subscriptions";
    protected $fillable = ['user_id', 'plan_id', 'subscription_date', 'expiry_date', 'transaction_id', 'transaction_data', 'subscription_status'];
    protected $guarded = ['id'];
}
