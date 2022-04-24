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
        Schema::connection('sibakul')->create('ukm_laporan_lima', function (Blueprint $table) {
            $table->id();
            $table->string('harga_rata')->nullable();
            $table->string('jml_produk')->nullable();
            $table->string('jml_stok')->nullable();
            $table->string('kelompok_produk_yia')->nullable();
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
        Schema::dropIfExists('ukm_laporan_lima');
    }
};
