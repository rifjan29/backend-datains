<?php

// use App\Models\Sibakul;

use App\Http\Controllers\SibakulController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/**
 * Just for example purpose, please move to Controller directory and remove this route
 */
Route::get('/', function() {
   
});

Route::post('/api/v2/bbppt/aplikasiSubmit', [App\Http\Controllers\v2\bbppt\AplikasiSubmitController::class, 'index'])->name('api.bbppt');