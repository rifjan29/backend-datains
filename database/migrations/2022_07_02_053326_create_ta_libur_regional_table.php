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
        Schema::connection('siap')->create('ta_libur_regional', function (Blueprint $table) {
            $table->string('tgl_libur')->nullable();
            $table->string('kode_cabang')->nullable();
            $table->string('ket_libur')->nullable();
            $table->string('id_libur')->nullable();
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
        Schema::dropIfExists('ta_libur_regional');
    }
};
