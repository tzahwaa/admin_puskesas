<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    /** 
     * fillable
     * 
     * @var array
     */
    protected $primaryKey = 'id_post';
    protected $fillable = [
        'name',
        'email',
        'phone',
        'slip_gaji'
    ];
    public $timestamps = false;

    public function pekerjaan()
    {
        return $this->belongsToMany('App\Models\Pekerjaan', 'post_pekerjaan', 'post_id', 'pekerjaan_id');
    }
    public function absensi()
    {
        return $this->belongsToMany('App\Models\Absensi', 'absensi', 'post_id', 'pekerjaan_id')->withPivot('status', 'keterangan');
    }
}