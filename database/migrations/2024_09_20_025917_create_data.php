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
            $table->id('id_data');
            $table->integer('tahun_pengumpulan');
            $table->date('tanggal_pengumpulan');
            $table->enum('status_pengumpulan',['sudah','sedang_dikerjakan']);
            $table->string('keterangan_pengumpulan');
            $table->string('judul_publikasi');
            $table->text('link_publikasi');
            $table->text('link_metadata');
            $table->text('link_rekomendasi');
            $table->foreignid('id_skpd')->nullable();
            $table->foreign('id_skpd')->references('id_skpd')->on('skpd');
            $table->timestamps();
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
