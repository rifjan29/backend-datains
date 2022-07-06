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
        Schema::connection('simpeg')->create('ta_skp', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('tahun')->nullable();
            $table->string('nilai_capaian')->nullable(); 
            $table->string('orientasi')->nullable(); 
            $table->string('integritas')->nullable(); 
            $table->string('kotmitmen')->nullable(); 
            $table->string('disiplin')->nullable(); 
            $table->string('kerjasama')->nullable(); 
            $table->string('kepimimpinan')->nullable(); 
            $table->string('nilai_perilaku_kerja')->nullable(); 
            $table->string('nilai_prestasi_kerja')->nullable(); 
            $table->string('id_skp')->nullable(); 
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
        Schema::dropIfExists('ta_skp');
    }
};
