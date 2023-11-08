<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
{
    use HasFactory;

    protected $table = 'pelanggan';

    // Mapping kolom atau field
    protected $fillable = ['kode', 'nama', 'jk', 'tmp_lahir', 'tgl_lahir', 'email', 'kartu_id'];

    // Relasi many-to-one ke table yang berhubungan dengan kartu
    public function kartu()
    {
        return $this->belongsTo(Kartu::class, 'kartu_id', 'id');
    }
}
