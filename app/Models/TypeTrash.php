<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class TypeTrash extends Model
{
     use HasFactory;
    protected $fillable = [
        'types_names',
        'price_per_gram',
        'description',
    ];

    public function trashes(){
        return $this->hasMany(trash::class);
    }
}
