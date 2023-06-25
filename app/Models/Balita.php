<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Balita extends Model
{
    protected $table = 'balita';
       protected $fillable = [
        'nama_anak',
        'nama_ibu',
        'alamat',
        'jenis_kelamin',
        'umur',
        'berat_badan',
        'panjang_badan',
        'detak_jantung',
        'zscore_berat_badan',
        'zscore_panjang_badan',
        'klasifikasi_berat_badan',
        'klasifikasi_panjang_badan',
        'klasifikasi_detak_jantung',
        'posyandu_id',
        'puskesmas_id',
    ];
    public function posyandu()
    {
        return $this->belongsTo(Posyandu::class);
    }
    public function puskesmas()
    {
        return $this->belongsTo(Puskesmas::class);
    }
}
