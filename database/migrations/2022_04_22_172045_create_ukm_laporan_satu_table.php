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
        Schema::connection('sibakul')->create('ukm_laporan_satu', function (Blueprint $table) {
            $table->id();
            $table->string('jenis_pembinaan')->nullable();
            $table->string('jml_kegiatan')->nullable();
            $table->string('jml_peserta')->nullable();
            $table->string('tahun_periode')->nullable();
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
        Schema::dropIfExists('ukm_laporan_satu');
    }
};
