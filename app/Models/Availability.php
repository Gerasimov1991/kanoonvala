<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Availability extends Model
{
    protected $table = "lawyer_availability";

    protected $fillable = ['lawyer_id', 'avail_day', 'time_from', 'time_to', 'break_from', 'break_to',];
}
