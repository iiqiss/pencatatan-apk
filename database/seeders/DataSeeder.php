<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
            [
            'tahun_pengumpulan' => '2024',
            'tanggal_pengumpulan' => '2024-08-01',
            'keterangan_pengumpulan' => 'Keterangan kedua',
            'judul_publikasi' => 'Publikasi 2',
            'link_publikasi' => 'http://link_publikasi_2.com',
            'link_metadata' => 'http://link_metadata_2.com',
            'link_rekomendasi' => 'http://link_rekomendasi_2.com',
            'metadata' => 'Data metadata contoh',
            ],
        ];
        DB::table('data')->insert($data);
    }
}
