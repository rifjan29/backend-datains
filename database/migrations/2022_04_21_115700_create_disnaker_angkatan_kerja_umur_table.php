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
        Schema::connection('sibakul')->create('disnaker_angkatan_kerja_umur', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah')->nullable();
            $table->string('laki')->nullable();            
            $table->string('perempuan')->nullable();
            $table->string('tahun')->nullable();
            $table->string('kelompok_umur')->nullable();
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
        Schema::dropIfExists('disnaker_angkatan_kerja_umur');
    }
};
