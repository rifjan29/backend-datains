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
        Schema::connection('sibakul')->create('data_sertifikasi', function (Blueprint $table) {
            $table->id();
            $table->string('plg_id')->nullable();
            $table->string('nib')->nullable();
            $table->string('nomor_sertifikat')->nullable();
            $table->string('tgl_sertifikat')->nullable();
            $table->string('resertifikasi')->nullable();
            $table->string('nama_perangkat')->nullable();
            $table->string('merek')->nullable();
            $table->string('model')->nullable();
            $table->string('nama_dagang')->nullable();
            $table->string('jenis_permohonan')->nullable();
            $table->string('kelompok_perangkat')->nullable();
            $table->string('peruntukan')->nullable();
            $table->string('hs_code')->nullable();
            $table->string('nama_perusahaan')->nullable();
            $table->string('nama_pabrikan')->nullable();
            $table->string('negara_pabrikan')->nullable();
            $table->string('balai_uji_lhu')->nullable();
            $table->string('negara_balai_uji_lhu')->nullable();
            $table->string('balai_uji_lhu_dua')->nullable();
            $table->string('negara_balai_uji_lhu_dua')->nullable();
            $table->string('balai_uji_emc')->nullable();
            $table->string('balai_uji_safety')->nullable();
            $table->string('negara_balai_uji_safety')->nullable();
            $table->string('frekuensi')->nullable();
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
        Schema::dropIfExists('data_sertifikasi');
    }
};
