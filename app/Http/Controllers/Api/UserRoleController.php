<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\RoleRequest;
use App\Http\Resources\RoleResource;
use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;

class UserRoleController extends ApiController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $roles = QueryBuilder::for(Role::class)
            ->where('name', '!=', 'super-admin')
            ->allowedSorts('name')
            ->allowedFilters(['name'])
            ->paginate()
            ->appends($request->query());

        return RoleResource::collection($roles);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\RoleRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(RoleRequest $request)
    {
        try {
            $role = Role::create(['name' => $request->name]);
            $role->syncPermissions($request->permissions);
            return $this->sendResponse(new RoleResource($role));
         } catch (\Throwable $th) {
             return $this->sendErrorResponse($th->getMessage(), $th->getCode());
         }
    }

    /**
     * Display the specified resource.
     *
     * @param  \Spatie\Permission\Models\Role  $role
     * @return \Illuminate\Http\Response
     */
    public function show(Role $role)
    {
        return $this->sendResponse(new RoleResource($role));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\RoleRequest  $request
     * @param  \Spatie\Permission\Models\Role  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RoleRequest $request,Role $role)
    {
        try {
            $permissions = Permission::findMany($request->permissions);
            $role->update(['name' => $request->name]);
            $role->givePermissionTo($permissions);
            return $this->sendResponse(new RoleResource($role));
        } catch (\Throwable $th) {
            return $this->sendErrorResponse($th->getMessage(), $th->getCode());
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \Spatie\Permission\Models\Role  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Role $role)
    {
        $role->delete();
        return $this->sendResponse();
    }
}
