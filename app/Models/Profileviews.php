<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profileviews extends Model
{
    //
    protected $table = "profile_views";
    protected $fillable = ['user_id','view_count','ip_address','agent'];
}
