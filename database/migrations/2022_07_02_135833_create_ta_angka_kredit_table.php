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
        Schema::connection('simpeg')->create('ta_angka_kredit', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('tgl_penetapan')->nullable();
            $table->string('pak_1a1')->nullable();
            $table->string('pak_1a2')->nullable();
            $table->string('pak_1b')->nullable();
            $table->string('pak_1c')->nullable();
            $table->string('pak_1d')->nullable();
            $table->string('pak_1e')->nullable();
            $table->string('pak_2')->nullable();
            $table->string('catatan')->nullable();
            $table->string('kode_pejabat')->nullable();
            $table->string('path_filee')->nullable();
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
        Schema::dropIfExists('ta_angka_kredit');
    }
};
