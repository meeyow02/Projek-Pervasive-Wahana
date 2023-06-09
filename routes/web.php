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

Route::redirect('/', 'login');

Route::middleware(['auth'])->group(function (){
    Route::get('/home', function () {
        return view('pages.home', [
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

    Route::get('/pricing', function () {
        return view('pages.pricing', [
            'title' => 'Pricing'
        ]);
    })->name('pricing');

    Route::get('/vending', function () {
        return view('pages.vending', [
            'title' => 'Vending Machine'
        ]);
    })->name('vending-machine');

    Route::get('/restaurant', function () {
        return view('pages.restaurant', [
            'title' => 'Restaurant'
        ]);
    })->name('restaurant');

    Route::get('/attractions', function () {
        return view('pages.attractions', [
            'title' => 'Attractions'
        ]);
    })->name('attractions');
});

