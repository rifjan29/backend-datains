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
        Schema::connection('sibakul')->create('disnaker_angkatan_kerja_jenis_kelamin', function (Blueprint $table) {
            $table->id();
            $table->string('btl')->nullable();
            $table->string('gk')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('kp')->nullable();
            $table->string('slm')->nullable();
            $table->string('tahun')->nullable();
            $table->string('yk')->nullable();
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
        Schema::dropIfExists('disnaker_angkatan_kerja_jenis_kelamin');
    }
};
