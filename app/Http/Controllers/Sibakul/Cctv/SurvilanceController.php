<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Publik;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurvilanceController extends Controller
{
    public function index()
    {

        $url = "http://mam.jogjaprov.go.id/api/v1/cctvapplications/b870c04a-b634-4c6f-bcdb-28ff234c76f4/relationships/cctvs";

        $data = json_decode(file_get_contents($url), true);

        foreach ($data['data'] as $value ) {
            
            Publik::updateOrCreate([
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
