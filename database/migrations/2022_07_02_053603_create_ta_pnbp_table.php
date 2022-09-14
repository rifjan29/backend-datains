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
        Schema::connection('siap')->create('ta_pnbp', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('tahun')->nullable();
            $table->string('kode_golongan')->nullable();
            $table->string('kode_nomeklatur')->nullable();
            $table->string('honorarium')->nullable();
            $table->string('pot_a')->nullable();
            $table->string('pot_b')->nullable();
            $table->string('pot_c')->nullable();
            $table->string('pot_d')->nullable();
            $table->string('pot_e')->nullable();
            $table->string('total_pot')->nullable();
            $table->string('honorarium_setelah_pot')->nullable();
            $table->string('pajak_gol')->nullable();
            $table->string('potongan_pajak')->nullable();
            $table->string('honorarium_diterima')->nullable();
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
        Schema::dropIfExists('ta_pnbp');
    }
};
