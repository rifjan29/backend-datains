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
        Schema::connection('siap')->create('ta_ijin_jam', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->date('tgl_ijin')->nullable();
            $table->string('jam_awal')->nullable();
            $table->string('jam_akhir')->nullable();
            $table->string('kode_ijin')->nullable();
            $table->string('alasan_ijin')->nullable();
            $table->string('ijin_dinas')->nullable();
            $table->string('status_ijin')->nullable();
            $table->string('waktu_simpan')->nullable();
            $table->string('ijin_ke')->nullable();
            $table->string('flag_dokuen')->nullable();
            $table->string('nip_verifikasi')->nullable();
            $table->string('tgl_disetujui')->nullable();
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
        Schema::dropIfExists('ta_ijin_jam');
    }
};
