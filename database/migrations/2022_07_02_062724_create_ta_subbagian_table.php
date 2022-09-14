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
        Schema::connection('siap')->create('ta_subbagian', function (Blueprint $table) {
            $table->string('kode_subbagian')->nullable();
            $table->string('nama_subbagian')->nullable();
            $table->string('kode_bagian')->nullable();
            $table->string('aktif')->nullable();
            $table->string('mulai')->nullable();
            $table->string('sampai')->nullable();
            $table->string('waktu_simpan')->nullable();
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
        Schema::dropIfExists('ta_subbagian');
    }
};
