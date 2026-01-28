<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CustomerAccount extends Model
{

    
      protected $fillable = [
        'customer_id',
        'total_balance',
        'total_points',
        'status',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function customerAccount()
    {
        return $this->hasOne(CustomerAccount::class);
    }
}
