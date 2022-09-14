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
        Schema::connection('sibakul')->create('elapor_koordinat', function (Blueprint $table) {
            $table->id();
            $table->string('idk')->nullable();
            $table->text('isi')->nullable();
            $table->string('judul')->nullable();
            $table->string('lat')->nullable();
            $table->string('lon')->nullable();
            $table->string('sub_kategori')->nullable();
            $table->string('kategori')->nullable();
            $table->string('nama_file')->nullable();
            $table->string('image_path')->nullable();
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
        Schema::dropIfExists('elapor_koordinat');
    }
};
