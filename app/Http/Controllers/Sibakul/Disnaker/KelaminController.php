<?php

namespace App\Http\Controllers\Sibakul\Disnaker;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Disnaker\Kelamin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KelaminController extends Controller
{

    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'disnaker_trans_idmc_Laporan_Penduduk_Usia_Kerja_Berdasar_Jenis_Kelamin',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='disnaker_trans_idmc_Laporan_Penduduk_Usia_Kerja_Berdasar_Jenis_Kelamin';
        
        foreach ($data[$key] as $value ) {

            Kelamin::updateOrCreate([
                'tahun'=> $value['tahun'],
                'jenis_kelamin' => $value['jenis_kelamin']
            ],
            [
                'btl' => $value['BTL'],
                'gk' => $value['GK'],
                'jenis_kelamin' => $value['jenis_kelamin'],
                'jumlah' => $value['jumlah'],
                'kp' => $value['KP'],
                'slm' => $value['SLM'],
                'tahun' => $value['tahun'],
                'yk' => $value['YK'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
