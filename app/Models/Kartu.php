<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kartu extends Model
{
    use HasFactory;

    protected $table = 'kartu';
    //mapping kolom atau field
    protected $fillable = ['kode', 'nama', 'diskon','iuran'];
    //relasi antar tabel
    public function produk(){
        return $this->hasMany(Pelanggan::class);
    }
}
