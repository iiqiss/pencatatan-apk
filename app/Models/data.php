<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data extends Model
{
    use HasFactory;
    protected $table = 'data';
    protected $primaryKey = 'id_data';
    protected $fillable = ['tahun_pengumpulan',
                           'tanggal_pengumpulan',
                           'status_pengumpulan',
                           'keterangan_pengumpulan',
                           'judul_publikasi',
                           'link_publikasi',
                           'metadata',
                           'link_metadata',
                           'rekomendasi',
                           'link_rekomendasi',];
    public function data (){
        return $this->belongsTo(data::class);
    }
    public function skpd (){
        return $this->belongsTo(PengelolaModel::class);
    }
}
