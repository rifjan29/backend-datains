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
        Schema::connection('simpeg')->create('ta_cpns', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('nomor_nota_pers_bkn')->nullable();
            $table->string('tgl_nota')->nullable();
            $table->string('nomor_sk_cpns')->nullable();
            $table->string('tgl_sk_cpns')->nullable();
            $table->string('kode_golongan')->nullable();
            $table->string('tmt_cpns')->nullable();
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
        Schema::dropIfExists('ta_cpns');
    }
};
