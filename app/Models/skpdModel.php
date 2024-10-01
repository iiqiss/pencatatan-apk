<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class skpdModel extends Model
{
    use HasFactory;
    protected $table = 'skpd';
    protected $primaryKey = 'id_skpd';
    protected $fillable = ['nip','nama_pengelola','kontak_pengelola','nama_skpd','alamat_skpd'];
    public function data (){
        return $this->hasOne(data::class, 'id_skpd', 'id_skpd');
    }
}
