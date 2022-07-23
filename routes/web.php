<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\NilaiController;
use App\Http\Controllers\JurusanController;

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
    return view('welcome');
});

Auth::routes();
Route::resource('siswa', SiswaController::class);
Route::resource('nilai', NilaiController::class);
Route::resource('jurusan', JurusanController::class);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/test-admin', function()
{
    return view('layouts.admin');
});

Route::get('/hello', function () {
    return view('hello');
});
