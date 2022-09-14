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
        Schema::connection('sibakul')->create('sibakul_publik', function (Blueprint $table) {
            $table->id();
            $table->string('idp')->nullable();
            $table->string('sektor_kehutanan')->nullable();
            $table->string('tk_tenaga_borongan')->nullable();
            $table->string('tk_perempuan')->nullable();
            $table->string('tk_laki_laki')->nullable();
            $table->string('tahun')->nullable();
            $table->string('sektor_transportasi')->nullable();
            $table->string('sektor_real_estate_usaha_persewaan')->nullable();
            $table->string('sektor_pertanian')->nullable();
            $table->string('sektor_perdagangan')->nullable();
            $table->string('sektor_pariwisata')->nullable();
            $table->string('sektor_konstruksi')->nullable();
            $table->string('sektor_komunikasi')->nullable();
            $table->string('sektor_kelautan_dan_perikanan')->nullable();
            $table->string('aneka_usaha')->nullable();
            $table->string('sektor_jasa_pendidikan')->nullable();
            $table->string('sektor_jasa_kesehatan')->nullable();
            $table->string('sektor_industri_pengolahan')->nullable();
            $table->string('sektor_energi_dan_sumber_daya_mineral')->nullable();
            $table->string('perdagangan')->nullable();
            $table->string('nilai_omset')->nullable();
            $table->string('jenis_data')->nullable();
            $table->string('jasa_perorangan_yang_melayani_rumah_tangga')->nullable();
            $table->string('industri_pertanian')->nullable();
            $table->string('insdustri_non_pertanian')->nullable();
            $table->string('ekonomi_kreatif')->nullable();
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
        Schema::dropIfExists('sibakul_publik');
    }
};
