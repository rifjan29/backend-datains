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
        Schema::connection('simpeg')->create('t_pns', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('nomor_sk_pns')->nullable();
            $table->string('tgl_sk_pns')->nullable();
            $table->string('kode_golongan')->nullable();
            $table->string('kode_pejabat')->nullable();
            $table->string('kode_sumpah')->nullable();
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
        Schema::dropIfExists('ta_pns');
    }
};
