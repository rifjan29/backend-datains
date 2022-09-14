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
        Schema::connection('ditops')->create('pengunjung_ppt', function (Blueprint $table) {
            $table->string('bulan')->nullable();
            $table->string('kategori')->nullable();
            $table->string('jk')->nullable();
            $table->string('pengguna')->nullable();
            $table->string('pos_bln')->nullable();
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
        Schema::dropIfExists('pengunjung_ppt');
    }
};
