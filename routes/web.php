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

Route::get('/api/sibakul', [App\Http\Controllers\SibakulController::class, 'index'])->name('api.sibakul');
/* Disnaker */
Route::get('api/sibakul/disnaker/kelamin', [App\Http\Controllers\Sibakul\Disnaker\KelaminController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/pendidikan', [App\Http\Controllers\Sibakul\Disnaker\PendidikanController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/umur', [App\Http\Controllers\Sibakul\Disnaker\UmurController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/wilayah', [App\Http\Controllers\Sibakul\Disnaker\WilayahController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/akjk', [App\Http\Controllers\Sibakul\Disnaker\AngkatanKerjaJenisKelaminController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/akp', [App\Http\Controllers\Sibakul\Disnaker\AngkatanKerjaPendidikanController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/aku', [App\Http\Controllers\Sibakul\Disnaker\AngkatanKerjaUmurController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/akw', [App\Http\Controllers\Sibakul\Disnaker\AngkatanKerjaWilayahController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/pengangguranjk', [App\Http\Controllers\Sibakul\Disnaker\PengangguranJenisKelaminController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/pengangguranpdk', [App\Http\Controllers\Sibakul\Disnaker\PengangguranPendidikanController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/pengangguranumur', [App\Http\Controllers\Sibakul\Disnaker\PengangguranUmurController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/pengangguranwlyh', [App\Http\Controllers\Sibakul\Disnaker\PengangguranWilayahController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/migran', [App\Http\Controllers\Sibakul\Disnaker\MigranController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/migranasal', [App\Http\Controllers\Sibakul\Disnaker\MigranAsalController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/migranasaltujuan', [App\Http\Controllers\Sibakul\Disnaker\MigranAsalTujuanController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/disnaker/migrantujuan', [App\Http\Controllers\Sibakul\Disnaker\MigranTujuanController::class, 'index'])->name('api.sibakul');

/* UKM */
Route::get('api/sibakul/ukm/kabupaten', [App\Http\Controllers\Sibakul\Ukm\KabupatenController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/jeniskelamin', [App\Http\Controllers\Sibakul\Ukm\JenisKelaminController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/kelas', [App\Http\Controllers\Sibakul\Ukm\KelasController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/klasifikasi', [App\Http\Controllers\Sibakul\Ukm\KlasifikasiController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/pendidikan', [App\Http\Controllers\Sibakul\Ukm\PendidikanController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/sektorekraf', [App\Http\Controllers\Sibakul\Ukm\SektorEkrafController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/disabilitas', [App\Http\Controllers\Sibakul\Ukm\DisabilitasController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/sektorgroup', [App\Http\Controllers\Sibakul\Ukm\SektorGroupController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/laporansatu', [App\Http\Controllers\Sibakul\Ukm\LaporanSatuController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/laporandua', [App\Http\Controllers\Sibakul\Ukm\LaporanDuaController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/laporantiga', [App\Http\Controllers\Sibakul\Ukm\LaporanTigaController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/laporanempat', [App\Http\Controllers\Sibakul\Ukm\LaporanEmpatController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/laporanlima', [App\Http\Controllers\Sibakul\Ukm\LaporanLimaController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/ukm/laporanenam', [App\Http\Controllers\Sibakul\Ukm\LaporanEnamController::class, 'index'])->name('api.sibakul');

/* UKM */
Route::get('api/sibakul/koperasi', [App\Http\Controllers\Sibakul\koperasi\KoperasiController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/koperasi/kelompok', [App\Http\Controllers\Sibakul\koperasi\KelompokController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/koperasi/jenis', [App\Http\Controllers\Sibakul\koperasi\JenisController::class, 'index'])->name('api.sibakul');

/* Publik */
Route::get('api/sibakul/publik/all', [App\Http\Controllers\Sibakul\Publik\AllController::class, 'index'])->name('api.sibakul');

/* E_Lapor */
Route::get('api/sibakul/elapor/list', [App\Http\Controllers\Sibakul\E_lapor\ListSkpdController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/elapor/koordinat', [App\Http\Controllers\Sibakul\E_lapor\KoordinatController::class, 'index'])->name('api.sibakul');

/* CCTV */
Route::get('api/sibakul/cctv', [App\Http\Controllers\Sibakul\Cctv\SurvilanceController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/cctv/bantul', [App\Http\Controllers\Sibakul\Cctv\SurvilanceBantulController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/cctv/kominfosleman', [App\Http\Controllers\Sibakul\Cctv\SurvilanceKominfoslemanController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/cctv/kota', [App\Http\Controllers\Sibakul\Cctv\SurvilanceKotaController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/cctv/kp', [App\Http\Controllers\Sibakul\Cctv\SurvilanceKpController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/cctv/sleman', [App\Http\Controllers\Sibakul\Cctv\SurvilanceSlemanController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/cctv/sungai', [App\Http\Controllers\Sibakul\Cctv\SurvilanceSungaiController::class, 'index'])->name('api.sibakul');
Route::get('api/sibakul/cctv/uptmalioboro', [App\Http\Controllers\Sibakul\Cctv\SurvilanceUptmalioboroController::class, 'index'])->name('api.sibakul');
