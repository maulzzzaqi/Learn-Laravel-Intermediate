<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
// use Illuminate\Support\Facades\App\Data\Tabungan;

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
    // return view('welcome');
    return dd(app('maul'), app('maul'));
});

app()->singleton('maul', function () {
    return new \App\Data\Tabungan();
});

// app()->bind('hello', function () {

// })