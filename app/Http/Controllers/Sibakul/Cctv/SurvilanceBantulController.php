<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Bantul;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurvilanceBantulController extends Controller
{
    public function index()
    {

        $url = "http://mam.jogjaprov.go.id/api/v1/cctvapplications/521cf1f3-347b-4f9b-9b9e-a3c067b427ab/relationships/cctvs";

        $data = json_decode(file_get_contents($url), true);

        foreach ($data['data'] as $value ) {
            
            Bantul::updateOrCreate([
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
