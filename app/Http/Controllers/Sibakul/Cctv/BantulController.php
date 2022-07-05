<?php
namespace App\Http\Controllers\Sibakul\Cctv;

use App\Http\Controllers\Controller;
use App\Models\Sibakul\Cctv\Relationships;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class BantulController extends Controller
{
    public function index()
    {

/*
        $url1 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/521cf1f3-347b-4f9b-9b9e-a3c067b427ab/cctvs";
        $url2 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/b7fa9241-78e5-4dde-8d59-3a3806a10586/cctvs?page%5Bnumber%5D=2&page%5Bsize%5D=15";
        $url3 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/b7fa9241-78e5-4dde-8d59-3a3806a10586/cctvs?page%5Bnumber%5D=3&page%5Bsize%5D=15";
        $url4 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/b7fa9241-78e5-4dde-8d59-3a3806a10586/cctvs?page%5Bnumber%5D=4&page%5Bsize%5D=15";

        $data1 = json_decode(file_get_contents($url1), true);
        $data2 = json_decode(file_get_contents($url2), true);
        $data3 = json_decode(file_get_contents($url3), true);
        $data4 = json_decode(file_get_contents($url4), true);
        */
        $url1 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications";
        $data1 = json_decode(file_get_contents($url1), true);
        $key='data';
        $kunci = $data1[$key]['2']['id'];
        $url2 = "https://mam.jogjaprov.go.id/api/v1/cctvapplications/".$kunci."/cctvs";
        $data2 = json_decode(file_get_contents($url2), true);
        $key2='data';
        
        foreach ($data2[$key] as $value ) {
            $curl = curl_init();
            $url1 = $value['attributes']['stream-url'];
            curl_setopt_array($curl, array(
            CURLOPT_URL => $url1,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => '',
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => 'GET',
            ));

            $response = curl_exec($curl);

            if($response == ''){
                $konek = 0;
            }else{
                $konek = 1;
            }

            Relationships::updateOrCreate([
                'idc'=> $value['id'],
                'name'=> $value['attributes']['name']
            ],
            [
                'idc' => $value['id'],
                'location' => 'cctv-bantul',
                'name' => $value['attributes']['name'],
                'connection'=> $konek,
                'stream-url' => $value['attributes']['stream-url'],
                'stream-thumbnail' => $value['attributes']['stream-thumbnail']['360p'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
        
    }
}
