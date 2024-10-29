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
            $table->integer('tahun_pengumpulan')->nullable();
            $table->string('judul_publikasi')->nullable();
            $table->text('link_publikasi')->nullable();
            $table->text('link_metadata')->nullable();
            $table->text('link_rekomendasi')->nullable();
            $table->enum('status_pengumpulan',['sudah','belum_lengkap','belum'])->nullable();
            $table->string('keterangan_pengumpulan')->nullable();
            $table->unsignedBigInteger('id_skpd')->nullable();
            $table->foreign('id_skpd')->references('id_skpd')->on('skpd')->cascadeOnDelete()->cascadeOnUpdate();
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
