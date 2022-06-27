<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Relationships;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KpController extends Controller
{
    public function index()
    {


        $url1 = "http://mam.jogjaprov.go.id/api/v1/cctvapplications/46991d09-6d62-4849-a054-67df8658ab94/cctvs";
        $url2 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/b7fa9241-78e5-4dde-8d59-3a3806a10586/cctvs?page%5Bnumber%5D=2&page%5Bsize%5D=15";
        $url3 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/b7fa9241-78e5-4dde-8d59-3a3806a10586/cctvs?page%5Bnumber%5D=3&page%5Bsize%5D=15";
        $url4 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/b7fa9241-78e5-4dde-8d59-3a3806a10586/cctvs?page%5Bnumber%5D=4&page%5Bsize%5D=15";

        $data1 = json_decode(file_get_contents($url1), true);
        $data2 = json_decode(file_get_contents($url2), true);
        $data3 = json_decode(file_get_contents($url3), true);
        $data4 = json_decode(file_get_contents($url4), true);
        $key='data';
        
        foreach ($data1[$key] as $value ) {
            
            Relationships::updateOrCreate([
                'idc'=> $value['id'],
                'name'=> $value['attributes']['name']
            ],
            [
                'idc' => $value['id'],
                'location' => 'cctv-kp',
                'name' => $value['attributes']['name'],
                'stream-url' => $value['attributes']['stream-url'],
                'stream-thumbnail' => $value['attributes']['stream-thumbnail']['360p'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
        
    }
}
