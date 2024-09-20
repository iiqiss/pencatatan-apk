<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PengelolaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $pengelola = [
            [
                'nip' => '1987654321010001',
                'nama_pengelola' => 'Enzo',
                'kontak_pengelola'=> '08554',
                'nama_dinas' => 'Dinas Pendidikan'
            ],
            [
                'nip' => '1987654321010002',
                'nama_pengelola' => 'Theo',
                'kontak_pengelola'=> '085545',
                'nama_dinas' => 'Dinas Lingkungan'
            ],
        ];
        DB::table('pengelola')->insert($pengelola);
    }
}
