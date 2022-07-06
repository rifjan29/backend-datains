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
        Schema::connection('ditops')->create('sertifikasi_kecakapan', function (Blueprint $table) {
            $table->string('provinsi')->nullable();
            $table->string('tahun')->nullable();
            $table->string('kategori')->nullable();
            $table->string('peserta')->nullable();
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
        Schema::dropIfExists('reor_sertifikasi');
    }
};
