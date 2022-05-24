<?php

use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserPermissionController;
use App\Http\Controllers\Api\UserRoleController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\CctvController;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/


Route::group(['prefix' => 'v1'], function() {
    Route::get('menus/flat', [MenuController::class, 'flatMenu']);
    Route::resource('menus', MenuController::class);
    Route::get('ticket', function() {
        $abc = Http::asForm()->post('https://tableau.datains.id/trusted', [
            "username" => "admin",
        ]);

        return $abc->body();
    });

    Route::group(['middleware' => ['auth:sanctum']], function() {
        Route::get('users/me', function(Request $request) {
            $user = $request->user();

            $permissions = [];
            foreach ($user->getAllPermissions() as $permission) {
                $permissions[] = $permission->name;
            }

            $roles = [];
            foreach ($user->getRoleNames() as $role) {
                $roles = $role;
            }

            return [
                'email' => $user->email,
                'name' => $user->name,
                'role' => $roles,
                'permissions' => $permissions
            ];
        });
        Route::resource('users/roles', UserRoleController::class);
        Route::get('users/permissions', UserPermissionController::class);
        Route::resource('users', UserController::class);
        Route::resource('permissions', PermissionController::class);
        Route::get('cctv',CctvController::class);
    });
});
