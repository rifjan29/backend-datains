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
        Schema::connection('sibakul')->create('penggunaan_frekuensi', function (Blueprint $table) {
            $table->id();
            $table->string('client')->nullable();
            $table->string('pita_frekuensi')->nullable();
            $table->string('frek_tx')->nullable();
            $table->string('frek_rx')->nullable();
            $table->string('perangkat')->nullable();
            $table->string('model')->nullable();
            $table->string('brands')->nullable();
            $table->string('desc')->nullable();
            $table->string('jumlah')->nullable();
            $table->string('stasiun')->nullable();
            $table->string('jenis_penggunaan')->nullable();
            $table->string('tahun')->nullable();
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
        Schema::dropIfExists('penggunaan_frekuensi');
    }
};
