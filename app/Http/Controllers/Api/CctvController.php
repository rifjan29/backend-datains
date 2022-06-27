<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CctvResource;
use App\Models\Cctv;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\AllowedFilter;
use Spatie\QueryBuilder\QueryBuilder;

class CctvController extends Controller
{
    public function __invoke(Request $request)
    {
        $cctv = QueryBuilder::for(Cctv::class)
            ->allowedSorts('name','location')
            ->allowedFilters(['name',AllowedFilter::exact('location')])
            ->paginate()
            ->appends($request->query());

        return CctvResource::collection($cctv);
    }
}
