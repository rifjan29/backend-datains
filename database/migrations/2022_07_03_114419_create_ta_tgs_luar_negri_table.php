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
        Schema::connection('simpeg')->create('ta_tgs_luar_negri', function (Blueprint $table) {
            $table->string('id_tugas')->nullable();
            $table->string('nip')->nullable();
            $table->string('tgl_mulai')->nullable();
            $table->string('tgl_selesai')->nullable();
            $table->string('negara')->nullable();
            $table->string('jenis_kunjungan')->nullable();
            $table->string('kode_pejabat')->nullable();
            $table->string('nomor_sk')->nullable();
            $table->string('tgl_sk')->nullable();
            $table->string('jml_lama')->nullable();
            $table->string('satuan')->nullable();
            $table->string('sumber')->nullable();
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
        Schema::dropIfExists('ta_tgs_luar_negri');
    }
};
