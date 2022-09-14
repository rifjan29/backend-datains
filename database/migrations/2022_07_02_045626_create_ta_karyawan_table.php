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
        Schema::connection('siap')->create('ta_karyawan', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('pin')->nullable();
            $table->string('nama')->nullable();
            $table->string('non_aktif')->nullable();
            $table->string('template')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('no_mesin')->nullable();
            $table->string('kode_cabang')->nullable();
            $table->string('kode_departemen')->nullable();
            $table->string('kode_jabatan')->nullable();
            $table->string('kode_golongan')->nullable();
            $table->string('kode_shift')->nullable();
            $table->string('tmt')->nullable();
            $table->string('aktif')->nullable();
            $table->string('kode_unit')->nullable();
            $table->string('kode_bagian')->nullable();
            $table->string('kode_subbagian')->nullable();
            $table->string('kode_eselon')->nullable();
            $table->string('kode_status_pegawai')->nullable();
            $table->string('waktu_simmpan')->nullable();
            $table->string('jabatan_struktural')->nullable();
            $table->string('kode_grade')->nullable();
            $table->string('npwp')->nullable();
            $table->string('nama_bank')->nullable();
            $table->string('norek_bank')->nullable();
            $table->string('kode_nomenklatur')->nullable();
            $table->string('kode_jabatan_plt')->nullable();
            $table->string('kode_tugas')->nullable();
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
        Schema::dropIfExists('ta_karyawan');
    }
};
