<?php

namespace App\Http\Controllers\Sibakul\Ukm;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Disnaker\Pendidikan as DisnakerPendidikan;
use App\Models\Sibakul\Ukm\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PendidikanController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'datapublik_UKM_Per_Pendidikan',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='datapublik_UKM_Per_Pendidikan';
        
        foreach ($data[$key] as $value ) {

            Pendidikan::updateOrCreate([
                'pendidikan'=> $value['Pendidikan']
            ],
            [ 
                'pendidikan'=> $value['Pendidikan'],
                'btl' => $value['BTL'],
                'gk' => $value['GK'],
                'kp' => $value['KP'],
                'slm' => $value['SLM'],
                'yk' => $value['YK'],
                'jumlah' => $value['jumlah'],
                'aset' => $value['aset'],
                'omset' => $value['omset'],
                'rerata_aset' => $value['rerata_aset'],
                'rerata_omset' => $value['rerata_omset'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
