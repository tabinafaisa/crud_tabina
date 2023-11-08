<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Gudang extends Model
{
    // use HasFactory;
    protected $table = 'gudang';
    protected $fillable = ['id', 'nama_gudang', 'toko_id', 'kapasitas'];

    public function post(): BelongsTo
    {
        return $this->belongsTo(Toko::class, 'toko_id');
    }

}

