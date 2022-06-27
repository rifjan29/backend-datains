<?php

namespace App\Http\Controllers\Sibakul\Disnaker;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Disnaker\PengangguranPendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PengangguranPendidikanController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'disnaker_trans_idmc_Data_Penganggur_Berdasarkan_Pendidikan',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='disnaker_trans_idmc_Data_Penganggur_Berdasarkan_Pendidikan';
        
        foreach ($data[$key] as $value ) {

            PengangguranPendidikan::updateOrCreate([
                'tahun'=> $value['Tahun'],
                'tingkat_pendidikan' => $value['Tingkat_Pendidikan']
            ],
            [
                'jumlah' => $value['Jumlah'],
                'laki' => $value['Laki'],
                'perempuan' => $value['Perempuan'],
                'tahun' => $value['Tahun'],
                'tingkat_pendidikan' => $value['Tingkat_Pendidikan'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}

