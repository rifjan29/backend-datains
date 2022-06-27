<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\PermissionResource;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\QueryBuilder\QueryBuilder;

class UserPermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $roles = QueryBuilder::for(Permission::class)
            ->allowedSorts('name')
            ->allowedFilters(['name'])
            ->paginate()
            ->appends($request->query());

        return PermissionResource::collection($roles);
    }
}
