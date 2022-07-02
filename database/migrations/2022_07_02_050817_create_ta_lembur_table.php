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
        Schema::connection('siap')->create('ta_lembur', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('tgl_spl')->nullable();
            $table->string('jam_awal_spl')->nullable();
            $table->string('jam_akhir_spl')->nullable();
            $table->string('jenis_kerja_spl')->nullable();
            $table->string('status_lembur')->nullable();
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
        Schema::dropIfExists('ta_lembur');
    }
};
