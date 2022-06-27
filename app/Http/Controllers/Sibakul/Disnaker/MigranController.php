<?php
namespace App\Http\Controllers\Sibakul\Disnaker;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Disnaker\Migran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MigranController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'disnaker_trans_idmc_Data_Detail_Tenaga_Kerja_Migran',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='disnaker_trans_idmc_Data_Detail_Tenaga_Kerja_Migran';
        
        foreach ($data[$key] as $value ) {

            Migran::updateOrCreate([
                'tahun'=> $value['tahun'],
                'negara_tujuan' => $value['Negara_Tujuan']
            ],
            [
                "kp_laki" => $value['KP_Laki'],
                "yk_perempuan" => $value['YK_Perempuan'],
                "yk_laki" => $value['YK_Laki'],
                "yk_jumlah" => $value['YK_Jumlah'],
                "tahun" => $value['tahun'],
                "slm_perempuan" => $value['SLM_Perempuan'],
                "slm_laki" => $value['SLM_Laki'],
                "slm_jumlah" => $value['SLM_Jumlah'],
                "negara_tujuan" => $value['Negara_Tujuan'],
                "kp_perempuan" => $value['KP_Perempuan'],
                "kp_jumlah" => $value['KP_Jumlah'],
                "jml_perempuan" => $value['JML_Perempuan'],
                "jml_laki" => $value['JML_Laki'],
                "jml_jumlah" => $value['JML_Jumlah'],
                "gk_perempuan" => $value['GK_Perempuan'],
                "gk_laki" => $value['GK_Laki'],
                "gk_jumlah" => $value['GK_Jumlah'],
                "btl_perempuan" => $value['BTL_Perempuan'],
                "btl_laki" => $value['BTL_Laki'],
                "btl_jumlah" => $value['BTL_Jumlah'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
