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
        Schema::connection('sibakul')->create('disnaker_migran', function (Blueprint $table) {
            $table->id();
            $table->string("kp_laki")->nullable();
            $table->string("yk_perempuan")->nullable();
            $table->string("yk_laki")->nullable();
            $table->string("yk_jumlah")->nullable();
            $table->string("tahun")->nullable();
            $table->string("slm_perempuan")->nullable();
            $table->string("slm_laki")->nullable();
            $table->string("slm_jumlah")->nullable();
            $table->string("negara_tujuan")->nullable();
            $table->string("kp_perempuan")->nullable();
            $table->string("kp_jumlah")->nullable();
            $table->string("jml_perempuan")->nullable();
            $table->string("jml_laki")->nullable();
            $table->string("jml_jumlah")->nullable();
            $table->string("gk_perempuan")->nullable();
            $table->string("gk_laki")->nullable();
            $table->string("gk_jumlah")->nullable();
            $table->string("btl_perempuan")->nullable();
            $table->string("btl_laki")->nullable();
            $table->string("btl_jumlah")->nullable();
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
        Schema::dropIfExists('disnaker_migran');
    }
};
