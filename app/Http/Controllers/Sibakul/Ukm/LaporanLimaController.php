<?php

namespace App\Http\Controllers\Sibakul\Ukm;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Ukm\LaporanLima;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaporanLimaController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'datapublik_Laporan_UKM_5',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='datapublik_Laporan_UKM_5';
        
        foreach ($data[$key] as $value ) {

            LaporanLima::updateOrCreate([
                'kelompok_produk_yia'=> $value['kelompok_produk_yia']
            ],
            [ 
                'harga_rata' => $value['harga_rata'],
                'jml_produk' => $value['jml_produk'],
                'jml_stok' => $value['jml_stok'],
                'kelompok_produk_yia' => $value['kelompok_produk_yia'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
