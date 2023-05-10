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

Route::get('/', function () {
    $data = [
          'navlist'=> config('navlist'),
          'seriesList' => config('comics')
        ];
    return view('home', $data);
})->name('home');

//route per characters
Route::get('/characters', function () {
    $data = [
          'navlist'=> config('navlist'),
          'serieslist' => config('comics')
        ];
    return view('characters', $data);
})->name('characters');

//route per comics 
Route::get('/comics', function () {
    $data = [
          'navlist'=> config('navlist'),
          'serieslist' => config('comics')
        ];
    return view('comics', $data);
})->name('comics');

