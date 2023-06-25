<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    use HasFactory;
    protected $table='_pekerjaan';
    protected $primaryKey = 'id_pekerjaan';
    protected $fillable = [  
        'jabatan', 'id'
    ];
    public function post() 
    {
        return $this->belongsToMany('App\Models\Post', 'post_pekerjaan', 'pekerjaan_id', 'post_id')->withPivot('id_post_pekerjaan');
    }
    public function absen()
    {
        return $this->belongsToMany('App\Models\Abseni', 'absensi', 'pekerjaan_id', 'siswa_id')->withPivot('status', 'keterangan');
    }
}