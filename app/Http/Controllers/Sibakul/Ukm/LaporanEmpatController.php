<?php

namespace App\Http\Controllers\Sibakul\Ukm;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Ukm\LaporanEmpat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaporanEmpatController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'datapublik_Laporan_UKM_4',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='datapublik_Laporan_UKM_4';
        
        foreach ($data[$key] as $value ) {

            LaporanEmpat::updateOrCreate([
                'kelompok_produk_markethub'=> $value['kelompok_produk_markethub']
            ],
            [ 
                'kelompok_produk_markethub'=> $value['kelompok_produk_markethub'],
                'harga_rata' => $value['harga_rata'],
                'jml_produk' => $value['jml_produk'],
                'kelompok_produk_markethub' => $value['kelompok_produk_markethub'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
