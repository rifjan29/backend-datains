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
        Schema::connection('siap')->create('ta_hukuman_disiplin', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->date('tgl_awal')->nullable();
            $table->date('tgl_akhir')->nullable();
            $table->string('kode_potongan')->nullable();
            $table->date('tgl_penetapan')->nullable();
            $table->string('dokumen_disiplin')->nullable();
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
        Schema::dropIfExists('ta_hukuman_disiplin');
    }
};
