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
        Schema::create('skpd', function (Blueprint $table) {
            $table->id('id_skpd');
            $table->bigInteger('nip')->unique();
            $table->string('nama_pengelola');
            $table->bigInteger('kontak_pengelola');
            $table->string('nama_skpd');
            $table->text('alamat_skpd');
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
        Schema::dropIfExists('skpd');
    }
};
