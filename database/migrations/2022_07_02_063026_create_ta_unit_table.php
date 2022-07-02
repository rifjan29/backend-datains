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
        Schema::connection('siap')->create('ta_unit', function (Blueprint $table) {
            $table->string('kode_unit')->nullable();
            $table->string('nama_unit')->nullable();
            $table->string('kode_cabang')->nullable();
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
        Schema::dropIfExists('ta_unit');
    }
};
