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
        Schema::connection('sibakul')->create('koperasi_kelompok', function (Blueprint $table) {
            $table->id();
            $table->string('koperasi')->nullable();
            $table->string('yk')->nullable();
            $table->string('volume_usaha')->nullable();
            $table->string('triwulan')->nullable();
            $table->string('slm')->nullable();
            $table->string('tahun')->nullable();
            $table->string('sisa_hasil_usaha')->nullable();
            $table->string('rat')->nullable();
            $table->string('pasif')->nullable();
            $table->string('modal_sendiri')->nullable();
            $table->string('modal_luar')->nullable();
            $table->string('manajer_wanita')->nullable();
            $table->string('manajer_pria')->nullable();
            $table->string('kp')->nullable();
            $table->string('aktif')->nullable();
            $table->string('karyawan_wanita')->nullable();
            $table->string('karyawan_pria')->nullable();
            $table->string('jumlah_anggota')->nullable();
            $table->string('jumlah_karyawan')->nullable();
            $table->string('jumlah_manajer')->nullable();
            $table->string('jml_ap')->nullable();
            $table->string('gk')->nullable();
            $table->string('diy')->nullable();
            $table->string('btl')->nullable();
            $table->string('asset')->nullable();
            $table->string('anggota_wanita')->nullable();
            $table->string('anggota_pria')->nullable();
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
        Schema::dropIfExists('koperasi_kelompok');
    }
};
