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
        Schema::create('pertanahan_kabupaten', function (Blueprint $table) {
            $table->id();
            $table->string('jenis')->nullable();
            $table->string('lokasi')->nullable();
            $table->string('persil')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
        });

        Schema::create('pertanahan_luas', function (Blueprint $table) {
            $table->id();
            $table->string('lokasi')->nullable();
            $table->string('luas')->nullable();
            $table->timestamps();
        });

        DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'persil',
            'lokasi' => 'Kulon Progo',
            'persil' => '5340',
            'status' => '-',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'persil',
            'lokasi' => 'Bantul',
            'persil' => '4494',
            'status' => '-',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'persil',
            'lokasi' => 'Gunung Kidul',
            'persil' => '18028',
            'status' => '-',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'persil',
            'lokasi' => 'Sleman',
            'persil' => '4456',
            'status' => '-',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'persil',
            'lokasi' => 'Kota Yogyakarta',
            'persil' => '179',
            'status' => '-',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Kulon Progo',
            'persil' => '6354872',
            'status' => 'Kasultanan',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Kulon Progo',
            'persil' => '12443880',
            'status' => 'Kadipaten',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Kulon Progo',
            'persil' => '26408398',
            'status' => 'Tanah Desa',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Bantul',
            'persil' => '26671943',
            'status' => 'Kasultanan',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Bantul',
            'persil' => '7000',
            'status' => 'Kadipaten',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Bantul',
            'persil' => '3618524',
            'status' => 'Tanah Desa',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Gunung Kidul',
            'persil' => '33894050',
            'status' => 'Kasultanan',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Gunung Kidul',
            'persil' => '24274',
            'status' => 'Kadipaten',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Gunung Kidul',
            'persil' => '72292720',
            'status' => 'Tanah Desa',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Sleman',
            'persil' => '7742305',
            'status' => 'Kasultanan',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Sleman',
            'persil' => '0',
            'status' => 'Kadipaten',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Sleman',
            'persil' => '2367636',
            'status' => 'Tanah Desa',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Kota Yogyakarta',
            'persil' => '929208',
            'status' => 'Kasultanan',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Sleman',
            'persil' => '149756',
            'status' => 'Kadipaten',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_kabupaten')->insert([
            'jenis' => 'tanah',
            'lokasi' => 'Sleman',
            'persil' => '0',
            'status' => 'Tanah Desa',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         

        DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Pemakaman',
            'luas' => '2269608',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Permukiman',
            'luas' => '436826',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Taman Kota',
            'luas' => '11614',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Perkantoran',
            'luas' => '149370',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Tempat Pariwisata',
            'luas' => '131321',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Bangun Niaga',
            'luas' => '626050',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Hotel',
            'luas' => '7962',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Bangun Cagar Budaya',
            'luas' => '73205',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Bangun Pemerintah',
            'luas' => '2501378',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Tempat Ibadah',
            'luas' => '136264',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Sekolah',
            'luas' => '2646041',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Tanah Belum Dimanfaatkan',
            'luas' => '47159',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

         DB::table('pertanahan_luas')->insert([
            'lokasi' => 'Belum Terindentifikasi',
            'luas' => '174280311',
            'created_at' => '2022-05-16 11:29:31',
            'updated_at' => '2022-05-16 11:29:31'
            ]
         );

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pertanahan');
    }
};
