<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Relationships;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class SurvilanceRelationshipsController extends Controller
{
    public function index()
    {


        $url = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/b7fa9241-78e5-4dde-8d59-3a3806a10586/cctvs";

        /*
        $data = json_decode(file_get_contents($url), true);
        $key='meta';
        echo $data[$key]['page']['last-page'];
        */
        
        
        $data1 = json_decode(file_get_contents($url), true);
        $key1='data';
        
        foreach ($data1[$key1] as $value ) {
            
            Relationships::updateOrCreate([
                'idc'=> $value['id'],
                'name'=> $value['attributes']['name']
            ],
            [
                'idc' => $value['id'],
                'name' => $value['attributes']['name'],
                'stream-url' => $value['attributes']['stream-url'],
                'stream-thumbnail' => $value['attributes']['stream-thumbnail']['360p'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);

        }
        
    }
}
