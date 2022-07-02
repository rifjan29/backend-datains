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
        Schema::connection('siap')->create('ta_ijin', function (Blueprint $table) {
            $table->string('kode_ijin')->nullable();
            $table->string('ket_ijin')->nullable();
            $table->string('perhitungan')->nullable();
            $table->string('ketentuan')->nullable();
            $table->string('jatah_ijin')->nullable();
            $table->string('kredit')->nullable();
            $table->string('berlaku')->nullable();
            $table->string('dasar')->nullable();
            $table->string('proses_diawal')->nullable();
            $table->string('kode_tidak_hadir')->nullable();
            $table->string('hitung_hari_kerja')->nullable();
            $table->string('hitung_jam_kerja')->nullable();
            $table->string('potongan')->nullable();
            $table->string('kolektif')->nullable();
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
        Schema::dropIfExists('ta_ijin');
    }
};
