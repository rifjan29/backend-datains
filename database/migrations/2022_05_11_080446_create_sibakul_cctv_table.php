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
        Schema::connection('sibakul')->create('sibakul_cctv', function (Blueprint $table) {
            $table->id();
            $table->string('idc')->nullable();
            $table->string('location')->nullable();
            $table->string('name')->nullable();
            $table->string('stream-url')->nullable();
            $table->string('stream-thumbnail')->nullable();
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
        Schema::dropIfExists('sibakul_cctv');
    }
};
