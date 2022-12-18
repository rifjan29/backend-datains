<?php

use App\Http\Controllers\Api\MenuController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\UserPermissionController;
use App\Http\Controllers\Api\UserRoleController;
use App\Http\Controllers\Api\PermissionController;
use App\Http\Controllers\Api\CctvController;
use App\Http\Controllers\Api\ConfigController;
use App\Http\Controllers\Api\DatasetController;
use App\Http\Controllers\Api\DatasetFileController;
use App\Http\Controllers\Api\GetDatasetController;
use App\Http\Controllers\Api\MenuStagingController;
use App\Http\Controllers\AuthController;
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

Route::post('login', [AuthController::class, 'login']);

Route::group(['prefix' => 'v1'], function() {
    // dataset get data
    Route::get('download/{id}',[GetDatasetController::class,'download']);
    Route::get('get-dataset/{id}',[GetDatasetController::class,'getDatasetById']);
    Route::get('menu-dataset/{slug}',[GetDatasetController::class,'index'])->name('getdataset.index');
    Route::post('search',[GetDatasetController::class,'search'])->name('getdataset.search');
    Route::post('slug',[GetDatasetController::class,'slug'])->name('slug');
    // dataset menu
    Route::resource('dataset',DatasetController::class);
    // dataset file
    Route::resource('file-dataset',DatasetFileController::class);
    // Menu staging / datalake
    Route::get('menu-staging/{name}/{jenis}',[MenuStagingController::class,'getData']);
    Route::post('upload-data',[MenuStagingController::class,'upload']);

    Route::get('menus/flat', [MenuController::class, 'flatMenu']);
    Route::resource('menus', MenuController::class);
    Route::get('ticket', function() {
        $abc = Http::asForm()->post('https://tableau.datains.id/trusted', [
            "username" => "Datains",
        ]);

        return $abc->body();
    });
    Route::get('cctv', CctvController::class);

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
    });
    // Route::resource('config', ConfigController::class, ['except' => ['index']]);
    Route::get('config', ConfigController::class);
    Route::post('config/{config}',[ConfigController::class, 'update']);
});
