<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Sleman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurvilanceSlemanController extends Controller
{
    public function index()
    {

        $url = "http://mam.jogjaprov.go.id/api/v1/cctvapplications/cd5cac04-2927-41ca-848d-5067694815c6/relationships/cctvs";

        $data = json_decode(file_get_contents($url), true);

        foreach ($data['data'] as $value ) {
            
            Sleman::updateOrCreate([
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
