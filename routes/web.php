<?php

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
Auth::routes();

Route::get('/', function () {
    return view('welcome');
});
Route::get('/about_us', function () {
    return view('about_us');
});
Route::get('/about_us', [App\Http\Controllers\about_us::class, 'about_us'])->name('about_us');
Route::get('/nobat_giri', [App\Http\Controllers\nobat_giri::class, 'nobat_giri'])->name('nobat_giri');
Route::get('/nobat', function () {
    return view('welcome');
});
Route::get('/admin', function () {
    return view('admin/admin');
});



Route::get('/admin/listPezeshgan', [App\Http\Controllers\listPezeshgan::class, 'listPezeshgan'])->name('listPezeshgan');
Route::get('/admin/reseve_nobat', [App\Http\Controllers\listPezeshgan::class, 'reseve_nobat'])->name('reseve_nobat');
Route::post('/admin/savePezeshk', [App\Http\Controllers\listPezeshgan::class, 'savePezeshk'])->name('savePezeshk');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
