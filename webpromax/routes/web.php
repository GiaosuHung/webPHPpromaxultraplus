<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('HomePage');
});
Route::get('/Iphone', function () {
    return view('Iphone');
});
Route::get('/AmThanh', function () {
    return view('AmThanh');
});
Route::get('/IPag', function () {
    return view('IPag');
});
Route::get('/Mac', function () {
    return view('Mac');
});
Route::get('/PhuKien', function () {
    return view('PhuKien');
});
Route::get('/Watch', function () {
    return view('Watch');
});
Route::post('/register', function () {
    return view('HomePage');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
