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
        Schema::connection('sibakul')->create('elapor_kategori', function (Blueprint $table) {
            $table->id();
            $table->string('nama')->nullable();
            $table->string('jmlKeluhan')->nullable();
            $table->string('jmlTerbalas')->nullable();
            $table->string('jmlBelumTerbalas')->nullable();
            $table->string('jmlOntime')->nullable();
            $table->string('jmlLateResponse')->nullable();
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
        Schema::dropIfExists('elapor_kategori');
    }
};
