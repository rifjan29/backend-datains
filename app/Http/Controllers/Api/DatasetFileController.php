<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\FileDataset;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;
use Validator;

class DatasetFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = FileDataset::latest()->get();
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator($request->all(),[
            'file' => 'required|mimes:doc,docx,pdf,txt,csv,xlsx,xls',
            'name' => 'required',
            'id_dataset' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json($validate->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $add = new FileDataset;
            $add->name = $request->get('name');
            $file_upload = $request->file('file');
            if (isset($file_upload)) {
                $filename = date('His').'.'.$request->file('file')->extension();
                $path = public_path('file/');
                if ($file_upload->move($path,$filename)) {
                    $add->file = $filename;
                }
            }
            $add->path = url('file');
            $add->desc = $request->get('desc');
            $add->id_dataset = (int)$request->get('id_dataset');
            $add->save();
            $response = [
                'message' => 'data dataset file create',
                'data' => $add
            ];
            return response()->json($response,Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return $e;
            return response()->json([
                'message' => "failed" . $e->errorInfo,

            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = FileDataset::find($id);
        if ($data == null) {
            return response()->json([
                'message' => 'Data tidak ada.',
            ],Response::HTTP_BAD_REQUEST);
        }

        return response()->json([
            'message' => 'Berhasil mendapatkan data',
            'data' => $data,
        ], Response::HTTP_OK);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validate = Validator($request->all(),[
            'name' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json($validate->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            // return $request;
            $update = FileDataset::find($id);
            // return $update;
            $update->name = $request->get('name');
            $file_upload = $request->file('file');
            if (isset($file_upload)) {
                $file_path = public_path().'/file/'.$update->file;
                unlink($file_path);
                $filename = date('His').'.'.$request->file('file')->extension();
                // return $filename;
                $path = public_path('file/');
                if ($file_upload->move($path,$filename)) {
                    // return 'berhasil';
                    $update->file = $filename;
                }
            }
            $update->path = url('path');
            $update->desc = $request->get('desc');
            if ($request->get('id_dataset') != null) {
                $update->id_dataset = (int)$request->get('id_dataset');
            }
            $update->update();
            $response = [
                'message' => 'data dataset file update',
                'data' => $update
            ];
            return response()->json($response,Response::HTTP_CREATED);
        } catch (QueryException $e) {
            return response()->json([
                'message' => "failed" . $e,

            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = FileDataset::findOrFail($id);
        if ($delete == null) {
            return response()->json([
                'message' => 'Terjadi Kesalahan',
            ],Response::HTTP_BAD_REQUEST);
        };
        $file_path = public_path().'/file/'.$delete->file;
        unlink($file_path);
        $delete->delete();
        return response()->json([
            'message' => 'Berhasil menghapus data.'
        ],Response::HTTP_ACCEPTED);
    }
}
