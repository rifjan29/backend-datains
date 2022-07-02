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
        Schema::connection('sibakul')->create('penggunaan_frekuensi_2', function (Blueprint $table) {
            $table->id();
            $table->string('penggunaan')->nullable();
            $table->string('tipe_perangkat')->nullable();
            $table->string('merk_perangkat')->nullable(); 
            $table->string('rentang_mhz')->nullable(); 
            $table->string('frekuensi')->nullable();
            $table->string('desc')->nullable();    
            $table->string('client')->nullable();
            $table->string('equipment')->nullable();   
            $table->string('penyelenggara')->nullable();   
            $table->string('tx')->nullable();
            $table->string('rx')->nullable();
            $table->string('location')->nullable();
            $table->string('service')->nullable();
            $table->string('jenis_penggunaan')->nullable();
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
        Schema::dropIfExists('penggunaan_frekuensi_2');
    }
};
