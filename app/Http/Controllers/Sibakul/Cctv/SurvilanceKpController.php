<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Kp;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurvilanceKpController extends Controller
{
    public function index()
    {

        $url = "http://mam.jogjaprov.go.id/api/v1/cctvapplications/46991d09-6d62-4849-a054-67df8658ab94/relationships/cctvs";

        $data = json_decode(file_get_contents($url), true);

        foreach ($data['data'] as $value ) {
            
            Kp::updateOrCreate([
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
