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
        Schema::connection('simpeg')->create('ta_karyawan', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('kode_departemen')->nullable();
            $table->string('kode_jabatan')->nullable();
            $table->string('kode_golongan')->nullable();
            $table->string('kode_cabang')->nullable();
            $table->string('nama')->nullable();
            $table->string('alamat1')->nullable();
            $table->string('rtw1')->nullable();
            $table->string('kel')->nullable();
            $table->string('kec')->nullable();
            $table->string('kota1')->nullable();
            $table->string('kdpos')->nullable();
            $table->string('propinsi')->nullable();
            $table->string('negara1')->nullable();
            $table->string('tlp1')->nullable();
            $table->string('alamat2')->nullable();
            $table->string('rtw2')->nullable();
            $table->string('kel2')->nullable();
            $table->string('kec2')->nullable();
            $table->string('kota2')->nullable();
            $table->string('kdpos2')->nullable();
            $table->string('pvs2')->nullable();
            $table->string('negara2')->nullable();
            $table->string('tlp2')->nullable();
            $table->string('tmpt_lahir')->nullable();
            $table->string('tgl_lahir')->nullable();
            $table->string('npwp')->nullable();
            $table->string('jk')->nullable();
            $table->string('agama')->nullable();
            $table->string('no_hp')->nullable();
            $table->string('email1')->nullable();
            $table->string('email2')->nullable();
            $table->string('no_ktp')->nullable();
            $table->string('kebangsaan')->nullable();
            $table->string('pendidikan')->nullable();
            $table->string('gol')->nullable();
            $table->string('tgl_msk')->nullable();
            $table->string('status_masuk')->nullable();
            $table->string('status_gaji')->nullable();
            $table->string('status_kerja')->nullable();
            $table->string('komponen')->nullable();
            $table->string('metode')->nullable();
            $table->string('penghasilan')->nullable();
            $table->string('pph_sblmnya')->nullable();
            $table->string('tgl_berhenti')->nullable();
            $table->string('sts_brhnti')->nullable();
            $table->string('wkt_pecbaan')->nullable();
            $table->string('spgr')->nullable();
            $table->string('status_nikah')->nullable();
            $table->string('jumlah_anak')->nullable();
            $table->string('tanggungan')->nullable();
            $table->string('kode_byr')->nullable();
            $table->string('kode_bank')->nullable();
            $table->string('no_rek')->nullable();
            $table->string('keluar')->nullable();
            $table->string('gelar_dpn')->nullable();
            $table->string('gelar_blkg')->nullable();
            $table->string('kd_sts_pgw')->nullable();
            $table->string('kd_kdk_pgw')->nullable();
            $table->string('no_karpeg')->nullable();
            $table->string('no_akses')->nullable();
            $table->string('no_taspen')->nullable();
            $table->string('no_karis_karsu')->nullable();
            $table->string('disetujui')->nullable();
            $table->string('waktu_simpan')->nullable();
            $table->string('kode_unit')->nullable();
            $table->string('kode_bagian')->nullable();
            $table->string('kode_eselon')->nullable();
            $table->string('kode_subbagian')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('jbt_struktural')->nullable();
            $table->string('tinggi')->nullable();
            $table->string('bb')->nullable();
            $table->string('hobby')->nullable();
            $table->string('pin')->nullable();
            $table->string('non_aktif')->nullable();
            $table->string('kode_jabatan_plt')->nullable();
            $table->string('kode_tgs')->nullable();
            $table->string('penyetaraan')->nullable();
            $table->string('kode_tim_kerja')->nullable();
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
