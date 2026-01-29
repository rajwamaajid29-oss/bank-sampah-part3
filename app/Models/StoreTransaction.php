<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StoreTransaction extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika mengikuti konvensi Laravel)
    protected $table = 'store_transactions';

    // Kolom yang bisa diisi secara massal
    protected $fillable = [
        'transaction_code',
        'transaction_date',
        'customer_id',
        'collector_id',
        'total_amount',
        'payment_method',
        'payment_status',
    ];

    // Tipe data untuk kolom tertentu
    protected $casts = [
        'transaction_date' => 'date',
        'total_amount' => 'integer',
        
    ];

    /**
     * Relasi dengan Customer
     */
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    /**
     * Relasi dengan Collector
     */
    public function collector()
    {
        return $this->belongsTo(Collector::class);
    }
}
