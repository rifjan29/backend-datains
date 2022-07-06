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
        Schema::connection('simpeg')->create('ta_jasa', function (Blueprint $table) {
            $table->string('id_jasa')->nullable();
            $table->string('nip')->nullable();
            $table->string('tgl_sk')->nullable();
            $table->string('nomor_sk')->nullable();
            $table->string('asal_jasa')->nullable();
            $table->string('nama_jasa')->nullable();
            $table->string('kode_pejabat')->nullable();
            $table->string('path_file')->nullable();
            $table->string('disetujui')->nullable();
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
        Schema::dropIfExists('ta_jasa');
    }
};
