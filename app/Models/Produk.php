<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = 'produk';
    //mapping kolom atau field
    protected $fillable = ['kode', 'nama', 'harga_beli','harga_jual','stok','min_stok','jenis_produk_id'];
    //relasi one to many ke table yang berhubungan dengan produk
    public function produk(){
        return $this->belongsTo(Jenis_produk::class);
    }

    //relasi one to one
    // public function gaji(){
    //     return $this->hasOne(Gaji::class);
    // }
}
