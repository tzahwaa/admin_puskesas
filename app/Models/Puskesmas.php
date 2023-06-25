<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Puskesmas extends Model
{
   protected $table = 'puskesmas';

    public function posyandu()
    {
        return $this->hasMany(Posyandu::class);
    }
    public static $rules = [
        'nama_puskesmas' => 'required|nama_puskesmas|unique:puskesmas,nama_puskesmas',
    ];
}
