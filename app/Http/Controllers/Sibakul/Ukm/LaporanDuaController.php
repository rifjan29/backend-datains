<?php

namespace App\Http\Controllers\Sibakul\Ukm;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Ukm\LaporanDua;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LaporanDuaController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'datapublik_Laporan_UKM_2',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='datapublik_Laporan_UKM_2';
        
        foreach ($data[$key] as $value ) {

            LaporanDua::updateOrCreate([
                'kelas_binaan'=> $value['kelas_binaan']
            ],
            [ 
                'kelas_binaan'=> $value['kelas_binaan'],
                'diy' => $value['DIY'],
                'kab_bantul' => $value['kab_bantul'],
                'kab_gkidul' => $value['kab_gkidul'],
                'kab_kprogo' => $value['kab_kprogo'],
                'kab_sleman' => $value['kab_sleman'],
                'kota_yk' => $value['kota_yk'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
