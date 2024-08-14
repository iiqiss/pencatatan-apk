<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skpdModel extends Model
{
    use HasFactory;
    protected $table = 'skpd';
    protected $primaryKey = 'Id_skpd';
    protected $fillable = ['Nama_skpd','alamat_skpd'];
    public function data (){
        return $this->hasMany(data::class);
    }
    public function skpd (){
        return $this->belongsTo(skpd::class);
    }
}
