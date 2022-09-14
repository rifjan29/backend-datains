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
        Schema::connection('ditops')->create('radio_station_pita_frekuensi', function (Blueprint $table) {
            $table->string('idb')->nullable();
            $table->string('name')->nullable();
            $table->string('provinsi')->nullable();
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
        Schema::dropIfExists('stasiun_radio_pita_frekuesi');
    }
};
