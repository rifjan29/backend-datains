<?php

namespace App\Http\Controllers\v2\bbppt;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AplikasiSubmitController extends Controller
{
    public function index()
    {


        $url1 = "http://bbppt.postel.go.id/api/aplikasiSubmit?type_app=pengujian&tahun=2022&username=integrasi_data&password=161ebd7d45089b3446ee4e0d86dbcf92";
    
        $data1 = json_decode(file_get_contents($url1), true);
        dd($data1);
       
    }
}
