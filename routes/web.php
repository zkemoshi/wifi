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

// All Users
Route::get('/', function () {
    return view('index');
});

// Worker User
Route::get('/home', function () {
    return view('home.index');
});
Route::get('/home/confirm', function () {
    return view('home.confirm');
});


// Manager/ Partner User
Route::get('/manager', function () {
    return view('manager.index');
});
Route::get('/manager/site', function () {
    return view('manager.site');
});
Route::get('/manager/worker', function () {
    return view('manager.worker');
});
Route::get('/manager/voucher', function () {
    return view('manager.voucher');
});
Route::get('/manager/voucher/desc/{id}', function () {
    return view('manager.voucher_details');
});
