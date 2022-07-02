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
        Schema::connection('sibakul')->create('event_penting', function (Blueprint $table) {
            $table->id();
            $table->string('pita_frekuensi')->nullable();
            $table->string('frekuensi_mhz')->nullable();
            $table->string('level_dbm')->nullable();
            $table->string('penggunaan')->nullable();
            $table->string('indentifikasi')->nullable();
            $table->string('status')->nullable();
            $table->string('kondisi')->nullable();
            $table->string('jenis_indentifikasi')->nullable();
            $table->string('jenis_event')->nullable();
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
        Schema::dropIfExists('event_penting');
    }
};
