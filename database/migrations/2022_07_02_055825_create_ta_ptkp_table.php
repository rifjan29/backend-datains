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
        Schema::connection('siap')->create('ta_ptkp', function (Blueprint $table) {
            $table->string('kode_kawin')->nullable();
            $table->string('batas_ptpkp')->nullable();
            $table->string('ket_kawin')->nullable();
            $table->string('ptpkp')->nullable();
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
        Schema::dropIfExists('ta_ptkp');
    }
};
