<?php

namespace App\Http\Controllers\Sibakul\E_lapor;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\E_lapor\Kabupaten;
use App\Models\Sibakul\E_lapor\Kategori;
use App\Models\Sibakul\E_lapor\ListSkpd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ListSkpdController extends Controller
{
    public function index()
    {

        $url = "http://lapor.jogjaprov.go.id/admin/api/get_data_dashboard_idmc";

        $data = json_decode(file_get_contents($url), true);

        $key="listSkpd";
        $key2="listKategori";
        $key3="listKabupaten";
        
        foreach ($data[$key] as $value ) {

            ListSkpd::updateOrCreate([
                'nama'=> $value['nama']
            ],
            [
                'nama' => $value['nama'],
                'jmlkeluhan' => $value['jmlKeluhan'],
                'jmlterbalas' => $value['jmlTerbalas'],
                'jmlbelumterbalas' => $value['jmlBelumTerbalas'],
                'jmlontime' => $value['jmlOntime'],
                'jmllateresponse' => $value['jmlLateResponse'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }

        foreach ($data[$key2] as $value2 ) {

            Kategori::updateOrCreate([
                'nama'=> $value2['nama']
            ],
            [
                'nama' => $value2['nama'],
                'jmlkeluhan' => $value2['jmlKeluhan'],
                'jmlterbalas' => $value2['jmlTerbalas'],
                'jmlbelumterbalas' => $value2['jmlBelumTerbalas'],
                'jmlontime' => $value2['jmlOntime'],
                'jmllateresponse' => $value2['jmlLateResponse'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }

        foreach ($data[$key3] as $value3 ) {

            Kabupaten::updateOrCreate([
                'nama'=> $value3['nama']
            ],
            [
                'nama' => $value3['nama'],
                'jmlkeluhan' => $value3['jmlKeluhan'],
                'jmlterbalas' => $value3['jmlTerbalas'],
                'jmlbelumterbalas' => $value3['jmlBelumTerbalas'],
                'jmlontime' => $value3['jmlOntime'],
                'jmllateresponse' => $value3['jmlLateResponse'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
