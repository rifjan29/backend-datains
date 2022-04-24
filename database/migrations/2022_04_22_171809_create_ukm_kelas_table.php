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
        Schema::connection('sibakul')->create('ukm_kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kelas')->nullable();
            $table->string('btl')->nullable();
            $table->string('gk')->nullable();
            $table->string('kp')->nullable();
            $table->string('slm')->nullable();
            $table->string('yk')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('aset')->nullable();
            $table->string('omset')->nullable();
            $table->string('rerata_aset')->nullable();
            $table->string('rerata_omset')->nullable();
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
        Schema::dropIfExists('ukm_kelas');
    }
};
