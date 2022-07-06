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
        Schema::connection('simpeg')->create('ta_riwayat_diklat_fungsional', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('tgl_mulai')->nullable();
            $table->string('tgl_selesai')->nullable();
            $table->string('kode_diklat')->nullable();
            $table->string('tempat')->nullable();
            $table->string('penyelengara')->nullable();
            $table->string('angkatan')->nullable();
            $table->string('jml_jam')->nullable();
            $table->string('satuan')->nullable();
            $table->string('nomor_sttp')->nullable();
            $table->string('tgl_sttp')->nullable();
            $table->string('disetujui')->nullable();
            $table->string('id_riwayat')->nullable();
            $table->string('path_file')->nullable();
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
        Schema::dropIfExists('ta_riwayat_diklat_fungsional');
    }
};
