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
        Schema::connection('simpeg')->create('ta_penilaian', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('tgl_nilai')->nullable();
            $table->string('kesetiaan')->nullable();
            $table->string('prestasi')->nullable();
            $table->string('ketaatan')->nullable();
            $table->string('tgg_jwb')->nullable();
            $table->string('kejujuran')->nullable();
            $table->string('krj_sama')->nullable();
            $table->string('prakarsa')->nullable();
            $table->string('kepimpinan')->nullable();
            $table->string('catatan')->nullable();
            $table->string('kode_penilaian')->nullable();
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
        Schema::dropIfExists('ta_penilaian');
    }
};
