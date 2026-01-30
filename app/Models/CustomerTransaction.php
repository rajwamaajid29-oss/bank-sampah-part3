<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CustomerTransaction extends Model
{
    use HasFactory;

    protected $table = 'customer_transactions';

    protected $fillable = [
        'customer_account_id',
        'date',
        'transaction_type',
        'total_point',
        'total_balance',
        'descriptions',
    ];

    protected $casts = [
        'date' => 'date',
        'total_point' => 'integer',
        'total_balance' => 'integer',
    ];

    /**
     * Relasi ke Customer (Nasabah)
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'customer_account_id');
    }
}
