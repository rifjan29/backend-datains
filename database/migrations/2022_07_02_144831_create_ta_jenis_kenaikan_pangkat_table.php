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
        Schema::connection('simpeg')->create('ta_jenis_kenaikan_pangkat', function (Blueprint $table) {
            $table->string('kode_jenis_kenaikan_pangkat')->nullable();
            $table->string('nama_jenis_kenaikan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ta_jenis_kenaikan_pangkat');
    }
};
