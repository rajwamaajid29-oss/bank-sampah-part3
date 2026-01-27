<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CashAccount extends Model
{
    use HasFactory;

    protected $table = 'cash_accounts';

    protected $fillable = [
        'name',
        'balance',
        'description',
    ];

    /**
     * Relasi ke transaksi toko
     * 1 Akun Kas punya banyak Transaksi
     */
    public function storeTransactions()
    {
        return $this->hasMany(StoreTransaction::class);
    }
}
