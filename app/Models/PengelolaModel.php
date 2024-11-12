<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengelolaModel extends Model
{
    use HasFactory;
    protected $table = 'pengelola';
    protected $primaryKey = 'nip';
    protected $fillable = ['nama_pengelola','kontak_pengelola','nama_dinas'];
    public function data (){
        return $this->hasMany(data::class);
    }
    public function skpd (){
        return $this->belongsTo(skpdModel::class);
    }
}
