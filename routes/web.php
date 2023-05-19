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
    return view('home', [
        'title' => 'Home'
    ]);
})->name('home');

Route::get('/setting', function () {
    return view('pages.setting', [
        'title' => 'Setting'
    ]);
})->name('setting');

Route::get('/balance', function () {
    return view('pages.balance', [
        'title' => 'Balance'
    ]);
})->name('balance');

Route::get('/top-up', function () {
    return view('pages.topup', [
        'title' => 'Top Up'
    ]);
})->name('topup');

Route::get('/vending', function () {
    return view('pages.vending', [
        'title' => 'Vending Machine'
    ]);
})->name('vending-machine');
