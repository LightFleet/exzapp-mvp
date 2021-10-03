<?php

use App\Http\Controllers\ApiContoller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/mytests', function () {
    return view('tests');
});

Route::get('/demo-page', function () {
    return view('demo-page');
});

Route::resource('/api/test', ApiContoller::class);
