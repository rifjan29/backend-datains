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
        Schema::connection('ditops')->create('radio_dinas_maritim_penerbangan', function (Blueprint $table) {
            $table->string('ids')->nullable();
            $table->string('name')->nullable();
            $table->string('sub_name')->nullable();
            $table->string('tahun')->nullable();
            $table->string('stn')->nullable();
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
        Schema::dropIfExists('radio_dinas_maritim_penerbangan');
    }
};
