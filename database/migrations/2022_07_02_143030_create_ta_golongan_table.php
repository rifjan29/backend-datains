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
        Schema::connection('simpeg')->create('ta_golongan', function (Blueprint $table) {
            $table->string('kode_golongan')->nullable();
            $table->string('nama_golongan')->nullable();
            $table->string('nilai_bopt')->nullable();
            $table->string('pajak_golongan')->nullable();
            $table->string('tarif_makan')->nullable();
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
        Schema::dropIfExists('ta_golongan');
    }
};
