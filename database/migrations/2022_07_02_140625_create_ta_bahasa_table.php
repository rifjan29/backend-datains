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
        Schema::connection('simpeg')->create('ta_bahasa', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('nama_bahasa')->nullable();
            $table->string('jenis_bahasa')->nullable();
            $table->string('kemampuan_bahasa')->nullable();
            $table->string('id_bahasa')->nullable();
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
        Schema::dropIfExists('ta_bahasa');
    }
};
