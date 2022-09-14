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
        Schema::connection('siap')->create('ta_pola', function (Blueprint $table) {
            $table->string('kode_shift')->nullable();
            $table->string('tgl_mulai')->nullable();
            $table->string('nama_group')->nullable();
            $table->string('format')->nullable();
            $table->string('libur_nasional')->nullable();
            $table->string('kode_departemen')->nullable();
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
        Schema::dropIfExists('ta_pola');
    }
};
