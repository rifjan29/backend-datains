<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Relationships;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class PublicController extends Controller
{
    public function index()
    {


        $url1 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications";
        $data1 = json_decode(file_get_contents($url1), true);
        $key='data';
        $kunci = $data1[$key]['5']['id'];
        $url2 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/".$kunci."/cctvs";
        $data2 = json_decode(file_get_contents($url2), true);
        $key2='data';
        
        foreach ($data2[$key] as $value ) {
            Relationships::updateOrCreate([
                'idc'=> $value['id'],
                'name'=> $value['attributes']['name']
            ],
            [
                'idc' => $value['id'],
                'location' => 'cctv-bantul',
                'name' => $value['attributes']['name'],
                'connection'=> $value['attributes']['connection'],
                'stream-url' => $value['attributes']['stream-url'],
                'stream-thumbnail' => $value['attributes']['stream-thumbnail']['360p'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
