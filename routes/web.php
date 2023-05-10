<?php

use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HobiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\MatkulController;
use App\Models\Hobi;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\ConfirmPasswordController;
use App\Http\Controllers\Auth\ForgotPasswordController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\ResetPasswordController;
use App\Http\Controllers\Auth\VerificationController;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\MahasiswaController;

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


// Route::get('/category/{category_name}', [ProductController::class, 'index']);

// Route::get('/news/{news_name}', [NewController::class, 'index']);

// Route::get('/program/{program_name}', [programController::class, 'index']);

// Route::get('/about-us', [AboutController::class, 'index']);



Route::middleware('auth')->group(function () {
    Route::get('/', [HomeController::class, 'index']);
Route::get('/add', function () {
    return view('add');
});
Route::post('/add_process', 'ArtikelController@add_process');
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/hobi', [HobiController::class, 'index']);
Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/keluarga', [KeluargaController::class, 'index']);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::middleware(['auth'])->group(function(){
    //semua url selain Auth dan logout
Route::get('/', [HobiController::class, 'index']);
Route::post('/add_process', 'ArtikelController@add_process');
Route::get('/artikel', [ArtikelController::class, 'index']);
Route::get('/hobi', [HobiController::class, 'index']);
Route::get('/matkul', [MatkulController::class, 'index']);
Route::get('/keluarga', [KeluargaController::class, 'index']);
// Route::get('logout', [LoginController::class, 'logout']);
Route::get('/home', [HobiController::class, 'index'])->name('home');
Route::resource('/mahasiswa', MahasiswaController::class);
Route::resource('/barang', BarangController::class);
});


Route::get('/', 'HomeController@index')->name('home');


});
Route::get('logout', [LoginController::class, 'logout']);
Auth::routes();