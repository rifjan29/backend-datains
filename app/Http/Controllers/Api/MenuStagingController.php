<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\KominfoDitops;
use App\Models\MenuStaging;
use App\Models\Sibakul\koperasi\jenis;
use DB;
use Exception;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Validator;

class MenuStagingController extends Controller
{
    public function upload(Request $request)
    {

        $validate = Validator($request->all(),[
            'name' => 'required',
            'jenis' => 'required',
        ]);

        if ($validate->fails()) {
            return response()->json($validate->errors(), Response::HTTP_UNPROCESSABLE_ENTITY);
        }
        try {
            $result = setDataStaging($request->get('name'), $request->get('jenis'), $request->get('data'));
            if ($result == false) {
                return response()->json([
                    'message' => 'Data tidak sesuai.',
                    'data' => $result], 400);
            }
            return response()->json([
                'message' => 'Berhasil menambahkan data.',
                'data' => $result], 200);
            // if ($request->has('data')) {
            // }else{
            //     return response()->json(['message' => 'terjadi kesalahan',400]);
            // }
        } catch (Exception $e) {
            return response()->json(['message' => [$e->getMessage()], 400]);
        } catch (QueryException $e){
            return response()->json(['message' => [$e->getMessage()], 400]);
        }
    }

    public function getData($name, $jenis)
    {
        try {
            return getMenuStaging($name, $jenis);
        } catch (Exception $e) {
            // return $e;
            return response()->json(['message'=> 'terjadi kesalahan'],400);
        }
    }


}
