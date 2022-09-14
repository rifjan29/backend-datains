<?php

namespace App\Http\Controllers\Sibakul\koperasi;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\koperasi\jenis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class JenisController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'koperasi_Keragaan_Bentuk_Koperasi',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='koperasi_Keragaan_Bentuk_Koperasi';
        
        foreach ($data[$key] as $value ) {

            jenis::updateOrCreate([
                'koperasi' => $value['koperasi'],
                'tahun' => $value['tahun']
            ],
            [ 
                'koperasi' => $value['koperasi'],
                'yk' => $value['YK'],
                'volume_usaha' => $value['volume_usaha'],
                'triwulan' => $value['triwulan'],
                'slm' => $value['SLM'],
                'tahun' => $value['tahun'],
                'sisa_hasil_usaha' => $value['sisa_hasil_usaha'],
                'rat' => $value['rat'],
                'pasif' => $value['pasif'],
                'modal_sendiri' => $value['modal_sendiri'],
                'modal_luar' => $value['modal_luar'],
                'manajer_wanita' => $value['manajer_wanita'],
                'manajer_pria' => $value['manajer_pria'],
                'kp' => $value['KP'],
                'aktif' => $value['aktif'],
                'karyawan_wanita' => $value['karyawan_wanita'],
                'karyawan_pria' => $value['karyawan_pria'],
                'jumlah_anggota' => $value['jumlah_anggota'],
                'jumlah_karyawan' => $value['jumlah_karyawan'],
                'jumlah_manajer' => $value['jumlah_manajer'],
                'jml_ap' => $value['jml_ap'],
                'gk' => $value['GK'],
                'diy' => $value['DIY'],
                'btl' => $value['BTL'],
                'asset' => $value['asset'],
                'anggota_wanita' => $value['anggota_wanita'],
                'anggota_pria' => $value['anggota_pria'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
