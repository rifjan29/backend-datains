<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\PermissionRequest;
use App\Http\Resources\PermissionResource;
use App\Models\Permission;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class PermissionController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $permission = QueryBuilder::for(Permission::class)
            ->where('name', '!=', 'super-admin')
            ->allowedSorts('name')
            ->allowedFilters(['name'])
            ->paginate()
            ->appends($request->query());

        return PermissionResource::collection($permission);
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
    public function store(PermissionRequest $request)
    {
        try {
            $permission = Permission::create(['name' => $request->name]);
            return $this->sendResponse(new PermissionResource($permission));
        } catch (\Throwable $th) {
            return $this->sendErrorResponse($th->getMessage(), $th->getCode());
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Permission $permission)
    {
        return $this->sendResponse(new PermissionResource($permission));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PermissionRequest $request, Permission $permission)
    {
        try {
            $permission->update(['name' => $request->name]);
            return $this->sendResponse(new PermissionResource($permission));
        } catch (\Throwable $th) {
            return $this->sendErrorResponse($th->getMessage(), $th->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Permission $permission)
    {
        $permission->delete();
        return $this->sendResponse();
    }
}
