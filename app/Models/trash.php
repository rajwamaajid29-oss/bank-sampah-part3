<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class trash extends Model
{
     use HasFactory;
    protected $fillable = [
        'names',
        'type_trash_id',
        'price',
        'unit',
        'description',
    ];

    public function typeTrash(){
        return $this->belongsTo(TypeTrash::class);
    }

}