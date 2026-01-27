<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Collector extends Model
{
     protected $fillable = [
        'collector_names',
        'address',
        'phone_number',
        'email',
        'collector_type',
        'status',
    ];
}
