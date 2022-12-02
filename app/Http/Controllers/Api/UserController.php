<?php

namespace App\Http\Controllers\Api;

use App\Http\Requests\UserRequest;
use App\Http\Resources\UserResource;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Spatie\QueryBuilder\QueryBuilder;

class UserController extends ApiController
{
    public function index(Request $request)
    {
        $user = QueryBuilder::for(User::class)
            ->where('name', '!=', 'Super Admin')
            ->allowedSorts('name', 'email')
            ->allowedFilters(['name', 'email'])
            ->paginate()
            ->appends($request->query());

        return UserResource::collection($user);
    }

    public function show(User $user)
    {
        return $this->sendResponse(new UserResource($user));
    }

    public function store(UserRequest $request)
    {
        try {
           $user = User::create([
                'email' => $request->email,
                'name' => $request->name,
                'password' => Hash::make($request->password),
            ]);

            if ($request->role) {
                $role = Role::findById($request->role);
                $user->syncRoles($role);
            }

            return $this->sendResponse(new UserResource($user));
        } catch (\Throwable $th) {
            return $this->sendErrorResponse($th->getMessage(), $th->getCode());
        }
    }

    public function update(UserRequest $request, User $user)
    {
        try {
            $user->update([
                'email' => $request->email ?? $user->email,
                'name' => $request->name,
                'password' => $request->password ? Hash::make($request->password) : $user->password
            ]);

            if ($request->role) {
                $role = Role::findById($request->role);
                $user->syncRoles($role);
            }

            return $this->sendResponse(new UserResource($user));
        } catch (\Throwable $th) {
            return $this->sendErrorResponse($th->getMessage(), $th->getCode());
        }
    }

    public function destroy(User $user)
    {
        $user->delete();
        return $this->sendResponse();
    }
}
