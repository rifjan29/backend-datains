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
        Schema::connection('siap')->create('ta_range', function (Blueprint $table) {
            $table->string('kode_range')->nullable();
            $table->string('kode_absen')->nullable();
            $table->string('jam_awal')->nullable();
            $table->string('jam_akhir')->nullable();
            $table->string('tol_masuk')->nullable();
            $table->string('tol_pulang')->nullable();
            $table->string('limit_awal')->nullable();
            $table->string('limit_akhir')->nullable();
            $table->string('jam_kerja')->nullable();
            $table->string('jam_istirahat')->nullable();
            $table->string('waktu_flexibel')->nullable();
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
        Schema::dropIfExists('ta_range');
    }
};
