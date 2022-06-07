<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ConfigResource;
use App\Models\Config;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class ConfigController extends Controller
{
    public function __invoke(Request $request)
    {
        $config = QueryBuilder::for(Config::class)
        ->allowedSorts('id')->first()
        ->paginate()
        ->appends($request->query());

        return ConfigResource::collection($config);
    }

    public function update(Request $request, Config $config)
    {
        if ($request->file('site_logo')) {
	        $name = $request->file('site_logo');
	        $logo = time()."_".$name->getClientOriginalName();
	        $logoDir = $name->move("images", $logo);
			$config->update([
				'site_logo' => $logoDir->getPathname()
			]);
	    }
        $config->update($request->only('site_name','site_title','site_desc','color'));
        return response()->json([
            'succes' => true,
            'message' => 'Config Updated',
            'data' => $config->first()
        ]);
    }
}
