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
        Schema::connection('simpeg')->create('ta_sklain', function (Blueprint $table) {
            $table->string('id_sklain')->nullable();
            $table->string('nip')->nullable();
            $table->string('nomor_sklain')->nullable(); 
            $table->string('tgl_sklain')->nullable(); 
            $table->string('jenis_sklain')->nullable(); 
            $table->string('tahun')->nullable(); 
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
        Schema::dropIfExists('ta_sklain');
    }
};
