<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Toko extends Model
{
    // use HasFactory;
    protected $table = 'toko';
    protected $fillable = ['id', 'npwp', 'nama_toko', 'alamat', 'no_telepon', 'kategori', 'jam_buka', 'rating', 'review', 'image'];

    public function gudang(){
        return $this->hasMany(Gudang::class);
    }
}
