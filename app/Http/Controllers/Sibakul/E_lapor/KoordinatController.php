<?php

namespace App\Http\Controllers\Sibakul\E_lapor;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\E_lapor\Koordinat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KoordinatController extends Controller
{
    public function index()
    {

        $url = "http://lapor.jogjaprov.go.id/admin/api/get_kordinat_dashboard_idmc";

        $data = json_decode(file_get_contents($url), true);

        
        foreach ($data as $value ) {

            Koordinat::updateOrCreate([
                'idk'=> $value['id']
            ],
            [
                'idk' => $value['id'],
                'judul' => $value['judul'],
                'isi' => $value['isi'],
                'lat' => $value['lat'],
                'lon' => $value['lon'],
                'sub_kategori' => $value['sub_kategori'],
                'kategori' => $value['kategori'],
                'nama_file' => $value['nama_file'],
                'image_path' => $value['image_path'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
