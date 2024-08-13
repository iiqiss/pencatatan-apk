<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengelolaModel extends Model
{
    use HasFactory;
    protected $table = 'pengelola';
    protected $primaryKey = 'NIP';
    protected $fillable = ['Nama_pengelola','Kontak_pengelola','Nama_dinas'];
}
