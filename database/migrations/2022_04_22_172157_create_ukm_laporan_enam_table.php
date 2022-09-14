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
        Schema::connection('sibakul')->create('ukm_laporan_enam', function (Blueprint $table) {
            $table->id();
            $table->string('jml_trans')->nullable();
            $table->string('nilai_ongkir')->nullable();
            $table->string('nilai_trans')->nullable();
            $table->string('ratanilai_ongkir')->nullable();
            $table->string('ratanilai_trans')->nullable();
            $table->string('uraian')->nullable();
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
        Schema::dropIfExists('ukm_laporan_enam');
    }
};
