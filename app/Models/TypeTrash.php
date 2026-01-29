<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeTrash extends Model
{
    use HasFactory;

    protected $table = 'type_trashes';

    protected $fillable = [
        'names',
        'description',
    ];

    /**
     * Relasi ke tabel trashes
     * 1 jenis sampah punya banyak sampah
     */
    public function trashes()
    {
        return $this->hasMany(Trash::class, 'type_trash_id');
    }
}
