<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';
    //mapping kolom atau field
    protected $fillable = ['kode', 'nama', 'jk','tmp_lahit','tgl_lahir','email','kartu_id'];
    //relasi one to many ke table yang berhubungan dengan produk
    public function kartu(){
        return $this->hasOne(Kartu::class);
    }

}
