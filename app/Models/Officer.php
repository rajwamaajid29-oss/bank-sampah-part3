<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Officer extends Model
{
    protected $table = 'officer';

    protected $fillable = [
        'names_officer',
        'email',
        'password',
        'address',
        'phone_numbers',
    ];
}
