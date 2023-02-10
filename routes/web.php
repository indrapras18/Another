<?php
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KomentarController;
use App\Http\Controllers\InformasiController;
use App\Models\Informasi;

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

Route::get('/', function () {
    return view('landing');
});

Route::middleware(['auth'])->group(function(){
    Route::post('/tambah',[KomentarController::class, 'tambah'])->name('tambah');

    Route::get('/info', [App\Http\Controllers\KomentarController::class, 'info'])->name('info');

    Route::get('/dashboard', [App\Http\Controllers\KomentarController::class, 'dashboard'])->name('dashboard');

    Route::get('/features', [App\Http\Controllers\KomentarController::class, 'features'])->name('features');

    Route::get('/landing', [App\Http\Controllers\KomentarController::class, 'landing'])->name('landing');

    Route::get('/informasi', [App\Http\Controllers\InformasiController::class, 'informasi'])->name('informasi');

    Route::get('/data_info', [App\Http\Controllers\InformasiController::class, 'data_info'])->name('data_info');

    Route::get('/data', [App\Http\Controllers\KomentarController::class, 'data'])->name('data');

    Route::post('/add',[InformasiController::class, 'add'])->name('add');

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');