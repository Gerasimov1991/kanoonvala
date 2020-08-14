<?php

namespace App\Models;

use App\Models\BaseModel;
use Illuminate\Database\Eloquent\Model;

class Appointment extends BaseModel
{
    //
    protected $table = "appointments";

    protected $fillable = ['lawyer_id', 'client_id', 'name', 'email', 'contact_number', 'meeting_type', 'meeting_purpose', 'slot_date', 'slot_time', 'is_closed',];
}
