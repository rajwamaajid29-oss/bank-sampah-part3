<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'names_customers',
        'email',
        'password',
        'address',
        'phone_numbers',
        'points_id',
    ];
}
