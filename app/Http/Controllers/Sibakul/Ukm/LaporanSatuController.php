<?php

namespace App\Http\Controllers\Sibakul\Ukm;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Ukm\LaporanSatu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaporanSatuController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'datapublik_Laporan_UKM_1',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='datapublik_Laporan_UKM_1';
        
        foreach ($data[$key] as $value ) {

            LaporanSatu::updateOrCreate([
                'jenis_pembinaan'=> $value['Jenis_Pembinaan'],
                'tahun_periode'=> $value['Tahun_Periode']
            ],
            [ 
                'jenis_pembinaan'=> $value['Jenis_Pembinaan'],
                'tahun_periode' => $value['Tahun_Periode'],
                'jml_kegiatan' => $value['jml_kegiatan'],
                'jml_peserta' => $value['jml_Peserta'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
