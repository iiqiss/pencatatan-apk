<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->id('Id_data');
            $table->integer('Tahun_pengumpulan');
            $table->date('Tanggal_pengumpulan');
            $table->enum('Status_pengumpulan',['belum','sudah','sedang dikerjakan']);
            $table->string('Keterangan_pengumpulan');
            $table->string('Judul_publikasi');
            $table->text('Link_publikasi');
            $table->string('Metadata');
            $table->text('Link_metadata');
            $table->string('rekomendasi');
            $table->text('Link_rekomendasi');
            $table->foreignid('NIP');
            $table->foreign('NIP')->references('NIP')->on('pengelola');
            $table->foreignid('Id_skpd');
            $table->foreign('Id_skpd')->references('Id_skpd')->on('skpd');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('data');
    }
};
