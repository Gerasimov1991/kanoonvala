<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    //
    protected $fillable = [ 'name', 'email', 'mobile', 'reason_for', 'enquiry_statement'];
}
