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
        Schema::connection('sibakul')->table('sibakul_cctv', function (Blueprint $table) {
            $table->boolean('connection')
            ->after('stream-url')
            ->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::connection('sibakul')->table('sibakul_cctv', function (Blueprint $table) {
            $table->dropColumn('connection');
        });
    }
};
