<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Kota;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurvilanceKotaController extends Controller
{
    public function index()
    {

        $url = "http://mam.jogjaprov.go.id/api/v1/cctvapplications/ab960d2a-76cc-448c-bb2e-e337fd3ee150/relationships/cctvs";

        $data = json_decode(file_get_contents($url), true);

        foreach ($data['data'] as $value ) {
            
            Kota::updateOrCreate([
                'type'=> $value['type'],
                'idc'=> $value['id']
            ],
            [
                'idc' => $value['id'],
                'type' => $value['type'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
    }
}
