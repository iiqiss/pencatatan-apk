<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skpdModel extends Model
{
    use HasFactory;
    protected $table = 'skpd';
    protected $primaryKey = 'id_skpd';
    protected $fillable = ['nama_skpd','alamat_skpd'];
    public function data (){
        return $this->hasMany(data::class);
    }
    public function pengelola (){
        return $this->belongsTo(PengelolaModel::class);
    }
}
