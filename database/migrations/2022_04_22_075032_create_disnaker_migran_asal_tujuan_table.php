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
        Schema::connection('sibakul')->create('disnaker_migran_asal_tujuan', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah_kk')->nullable();
            $table->string('jumlah_jiwa')->nullable(); 
            $table->string('tahun')->nullable();
            $table->string('kabupaten')->nullable();
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
        Schema::dropIfExists('disnaker_migran_asal_tujuan');
    }
};
