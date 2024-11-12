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
            $table->string('nama_skpd');
            $table->text('alamat_skpd');
            $table->bigInteger('nip')->nullable();
            $table->string('nama_pengelola')->nullable();
            $table->bigInteger('kontak_pengelola')->nullable();
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
