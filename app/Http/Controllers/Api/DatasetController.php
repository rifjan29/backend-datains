<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\MenuDataset;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Validator;

class DatasetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = MenuDataset::latest()->get();
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validate = Validator::make($request->all(),[
            'name' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json($validate->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);

        }
        try {
            $slug = Str::slug($request->get('name'));
            $add = new MenuDataset;
            $add->name = $request->get('name');
            $add->slug = $slug;
            $add->save();
            $response = [
                'message' => 'data menu dataset create',
                'data' => $add
            ];

            return response()->json($response,Response::HTTP_CREATED);

        } catch (QueryException $e) {
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
        $data = MenuDataset::find($id);
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
        $validate = Validator::make($request->all(),[
            'name' => 'required',
        ]);
        if ($validate->fails()) {
            return response()->json($validate->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);

        }
        try {
            $slug = Str::slug($request->get('name'));
            $update = MenuDataset::findOrFail($id);
            $update->name = $request->get('name');
            $update->slug = $slug;
            $update->save();
            $response = [
                'message' => 'data menu dataset update',
                'data' => $update
            ];

            return response()->json($response,Response::HTTP_CREATED);

        } catch (QueryException $e) {
            return response()->json([
                'message' => "failed" . $e->errorInfo,

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
        $data = MenuDataset::findOrFail($id);
        if ($data == null) {
            return response()->json([
                'message' => 'Terjadi Kesalahan',
            ],Response::HTTP_BAD_REQUEST);
        };
        $data->delete();
        return response()->json([
            'message' => 'Berhasil menghapus data.'
        ],Response::HTTP_ACCEPTED);
    }
}
