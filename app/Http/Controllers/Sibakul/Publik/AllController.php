<?php

namespace App\Http\Controllers\Sibakul\Publik;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Publik\All;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class AllController extends Controller
{
    public function index()
    {

        $response = Http::withToken('eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJzZXJ2ZXJrdSIsImF1ZCI6ImFwbGlrYXNpTWJvaDc3IiwiaWF0IjoxNjI3MDIxMjY3LCJuYmYiOjE2MjcwMjEyNzcsImV4cCI6MTc2NzEwMDY4MCwiZGF0YSI6eyJpZCI6IjEwIiwiZmlyc3RuYW1lIjpudWxsLCJsYXN0bmFtZSI6bnVsbCwiZW1haWwiOiJhZmRoYWxsdXRoZmkxNDVAZ21haWwuY29tIn19.Wc4lYeTHJKtDlYsDHpx4n9i4VPw_c0k3aKiOnOzZENc')
        ->post('https://sibakuljogja.jogjaprov.go.id/restapi/api', [
            'data' => 'sibakul_Data_Public',
            'limit' => '0,100'
        ]);
    
        $data = $response->json();

        $key='sibakul_Data_Public';
        
        foreach ($data[$key] as $value ) {

            All::updateOrCreate([
                'idp'=> $value['ID'],
                'tahun' => $value['Tahun']
            ],
            [
                'idp' => $value['ID'],
                'sektor_kehutanan' => $value['Sektor_Kehutanan'],
                'tk_tenaga_borongan' => $value['TK_Tenaga_Borongan'],
                'tk_perempuan' => $value['TK_Perempuan'],
                'tk_laki_laki' => $value['TK_Laki_laki'],
                'tahun' => $value['Tahun'],
                'sektor_transportasi' => $value['Sektor_Transportasi'],
                'sektor_real_estate_usaha_persewaan' => $value['Sektor_Real_Estate_Usaha_Persewaan'],
                'sektor_pertanian' => $value['Sektor_Pertanian'],
                'sektor_perdagangan' => $value['Sektor_Perdagangan'],
                'sektor_pariwisata' => $value['Sektor_Pariwisata'],
                'sektor_konstruksi' => $value['Sektor_Konstruksi'],
                'sektor_komunikasi' => $value['Sektor_Komunikasi'],
                'sektor_kelautan_dan_perikanan' => $value['Sektor_Kelautan_dan_Perikanan'],
                'aneka_usaha' => $value['Aneka_Usaha'],
                'sektor_jasa_pendidikan' => $value['Sektor_Jasa_Pendidikan'],
                'sektor_jasa_kesehatan' => $value['Sektor_Jasa_Kesehatan'],
                'sektor_industri_pengolahan' => $value['Sektor_Industri_Pengolahan'],
                'sektor_energi_dan_sumber_daya_mineral' => $value['Sektor_Energi_dan_Sumber_Daya_Mineral'],
                'perdagangan' => $value['Sektor_Perdagangan'],
                'nilai_omset' => $value['Nilai_Omset'],
                'jenis_data' => $value['jenis_data'],
                'jasa_perorangan_yang_melayani_rumah_tangga' => $value['Jasa_Perorangan_yang_Melayani_Rumah_Tangga'],
                'industri_pertanian' => $value['Industri_Pertanian'],
                'insdustri_non_pertanian' => $value['Industri_non_pertanian'],
                'ekonomi_kreatif' => $value['Ekonomi_Kreatif'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

    }
}
