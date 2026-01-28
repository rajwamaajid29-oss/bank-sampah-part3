<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class StoreTransaction extends Model
{
    protected $fillable = [
        'transaction_code',
        'transaction_date',
        'customers_id',
        'seller_id',
        'total_amount',
        'payment_method',
        'payment_status',
        'transaction_status',
    ];

    public function customers(){
        return $this->belongsTo(Customer::class);
    }

}
