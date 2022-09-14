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
        Schema::connection('siap')->create('ta_ijin_hari', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->date('tgl_awal')->nullable();
            $table->date('tgl_akhir')->nullable();
            $table->string('kode_ijin')->nullable();
            $table->string('jml_hari')->nullable();
            $table->string('tgl_jatah')->nullable();
            $table->string('bukti_ijin')->nullable();
            $table->string('status')->nullable();
            $table->string('waktu_simpan')->nullable();
            $table->string('flag_dokumen')->nullable();
            $table->string('username')->nullable();
            $table->string('catatan_ijin')->nullable();
            $table->string('no_surat')->nullable();
            $table->string('kota_asal')->nullable();
            $table->string('kota_tujuan')->nullable();
            $table->string('jenis_transportasi')->nullable();
            $table->string('no_surat_dokter')->nullable();
            $table->string('negara_asal')->nullable();
            $table->string('negara_tujuan')->nullable();
            $table->string('id_ijin')->nullable();
            $table->string('nip_verifikator')->nullable();
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
        Schema::dropIfExists('ta_ijin_hari');
    }
};
