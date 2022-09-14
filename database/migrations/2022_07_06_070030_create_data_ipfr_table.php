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
        Schema::connection('ditops')->create('data_ipfr', function (Blueprint $table) {
            $table->string('pita')->nullable();
            $table->string('range')->nullable();
            $table->string('moda')->nullable();
            $table->string('nama_operator')->nullable();
            $table->string('jenis')->nullable();
            $table->string('area')->nullable();
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
        Schema::dropIfExists('data_ipfr');
    }
};
