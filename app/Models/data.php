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
                           'link_metadata',
                           'link_rekomendasi',
                           'file',
                        ];
    public function data (){
        return $this->belongsTo(skpdModel::class, 'id_skpd', 'id_skpd');
    }
}
