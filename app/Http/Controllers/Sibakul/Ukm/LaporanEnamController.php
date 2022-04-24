<?php

namespace App\Http\Controllers\Sibakul\Ukm;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Ukm\LaporanEnam;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaporanEnamController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'datapublik_Laporan_UKM_6',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='datapublik_Laporan_UKM_6';
        
        foreach ($data[$key] as $value ) {

            LaporanEnam::updateOrCreate([
                'uraian'=> $value['uraian']
            ],
            [ 
                'uraian' => $value['uraian'],
                'nilai_ongkir' => $value['nilai_ongkir'],
                'nilai_trans' => $value['nilai_trans'],
                'ratanilai_trans' => $value['ratanilai_trans'],
                'ratanilai_ongkir' => $value['ratanilai_ongkir'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
