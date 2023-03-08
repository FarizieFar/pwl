<?php

use App\Http\Controllers\ArtikelController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
Route::get('/', [HomeController::class, 'index']);

// Route::get('/category/{category_name}', [ProductController::class, 'index']);

// Route::get('/news/{news_name}', [NewController::class, 'index']);

// Route::get('/program/{program_name}', [programController::class, 'index']);

// Route::get('/about-us', [AboutController::class, 'index']);

Route::get('/add', function () {
    return view('add');
});
Route::post('/add_process', 'ArtikelController@add_process');
Route::get('/artikel', [ArtikelController::class, 'index']);