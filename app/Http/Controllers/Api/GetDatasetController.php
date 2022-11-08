<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FileDataset;
use App\Models\MenuDataset;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class GetDatasetController extends Controller
{
    public function index($slug)
    {
        $id = MenuDataset::where('slug',$slug)->first();
        $data = FileDataset::where('id_dataset',$id->id)->get();
        if (count($data) > 0 ) {
            return response()->json([
                'message' => 'Berhasil mendapatkan data',
                'data' => $data
            ],Response::HTTP_OK);
        }else{
            return response()->json([
                'message' => 'Tidak ada data',
            ],Response::HTTP_BAD_REQUEST);
        };
    }

    public function download($id)
    {
        $data = FileDataset::find($id);
        $file_path = public_path('file/'.$data->file);
        return response()->download($file_path);

    }

    public function search(Request $request)
    {
        try {
            $data = FileDataset::where('title','like',"%".$request->get('title')."%")->get();
            if (count($data) > 0) {
                return response()->json([
                    'message' => 'Berhasil mencari data',
                    'data' => $data,
                ],Response::HTTP_OK);
            } else {
                return response()->json([
                    'message' => 'data tidak ditemukan',
                ],Response::HTTP_BAD_REQUEST);
            }

        } catch (Exception $e) {
            return response()->json([$e],Response::HTTP_BAD_REQUEST);
        }
    }
}
