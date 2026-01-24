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

    public function trash_stock(){
        return $this->belongsTo(TrashStocks::class);
    }
    public function deposit_details(){
        return $this->hasMany(DepositDetail::class);
    }


    public function sales_details(){
        return $this->hasMany(SalesDetail::class);
    }

}
