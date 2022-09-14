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
        Schema::connection('sibakul')->create('ukm_laporan_dua', function (Blueprint $table) {
            $table->id();
            $table->string('diy')->nullable();
            $table->string('kab_bantul')->nullable();
            $table->string('kab_gkidul')->nullable();
            $table->string('kab_kprogo')->nullable();
            $table->string('kab_sleman')->nullable();
            $table->string('kelas_binaan')->nullable();
            $table->string('kota_yk')->nullable();
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
        Schema::dropIfExists('ukm_laporan_dua');
    }
};
