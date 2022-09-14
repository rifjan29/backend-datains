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
        Schema::connection('sibakul')->create('disnaker_migran_asal', function (Blueprint $table) {
            $table->id();
            $table->string('jumlah')->nullable();
            $table->string('laki')->nullable();            
            $table->string('perempuan')->nullable();
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
        Schema::dropIfExists('disnaker_migran_asal');
    }
};
