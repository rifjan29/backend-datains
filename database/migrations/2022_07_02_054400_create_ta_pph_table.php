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
        Schema::connection('siap')->create('ta_pph', function (Blueprint $table) {
            $table->string('nip')->nullable();
            $table->string('tahun')->nullable();
            $table->string('bulan')->nullable();
            $table->string('gjpokok')->nullable();
            $table->string('tjistri')->nullable();
            $table->string('tjanak')->nullable();
            $table->string('jmlgjtj')->nullable();
            $table->string('tjberas')->nullable();
            $table->string('tjstruk')->nullable();
            $table->string('tjfungsi')->nullable();
            $table->string('tjupns')->nullable();
            $table->string('nilai_tk')->nullable();
            $table->string('pembul')->nullable();
            $table->string('batas_ptkp')->nullable();
            $table->string('jml_penghasila_a')->nullable();
            $table->string('biaya_jabatan_a')->nullable();
            $table->string('iuran_pensiuan_a')->nullable();
            $table->string('pengurangan_a')->nullable();
            $table->string('neto_a')->nullable();
            $table->string('neto_setahun_a')->nullable();
            $table->string('ptkp_a')->nullable();
            $table->string('pkp_a')->nullable();
            $table->string('pkp_bulan')->nullable();
            $table->string('pph')->nullable();
            $table->string('pph_lapisan1_a')->nullable();
            $table->string('pph_lapisan2_a')->nullable();
            $table->string('pph_lapisan3_a')->nullable();
            $table->string('pph_lapisan4_a')->nullable();
            $table->string('pph_a')->nullable();
            $table->string('pph_sebelum')->nullable();
            $table->string('jumlah_penghasial_b')->nullable();
            $table->string('biaya_jabatan_b')->nullable();
            $table->string('iuran_pensiun_b')->nullable();
            $table->string('pengurangan_b')->nullable();
            $table->string('neto_b')->nullable();
            $table->string('neto_setahun_b')->nullable();
            $table->string('ptkp_b')->nullable();
            $table->string('pkp_b')->nullable();
            $table->string('pkp_bulan_b')->nullable();
            $table->string('pkp_bulat_b')->nullable();
            $table->string('pph_lapisan1_b')->nullable();
            $table->string('pph_lapisan2_b')->nullable();
            $table->string('pph_lapisan3_b')->nullable();
            $table->string('pph_lapisan4_b')->nullable();
            $table->string('pph_b')->nullable();
            $table->string('pph_sebulan_b')->nullable();
            $table->string('pajak_tk')->nullable();
            $table->string('tjdaerah')->nullable();
            $table->string('tjpercil')->nullable();
            $table->string('tjlain')->nullable();
            $table->string('tjkompen')->nullable();
            $table->string('tjpph')->nullable();
            $table->string('potpph')->nullable();
            $table->string('bersih')->nullable();
            $table->string('potpfk10')->nullable();
            $table->string('potpfkbul')->nullable();
            $table->string('potswrum')->nullable();
            $table->string('potkelbtj')->nullable();
            $table->string('pottabr')->nullable();
            $table->string('potlain')->nullable();
            $table->string('kdkawin')->nullable();
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
        Schema::dropIfExists('ta_pph');
    }
};
