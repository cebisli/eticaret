<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Http\Controllers\Frontend\PageController;

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

Route::group(['middleware','sitesetting'], function() {
    Route::get('/', [PageHomeController::class, 'anasayfa'])->name('anasayfa');

    Route::get('/urunler', [PageController::class, 'urunler'])->name('urunler');
    Route::get('/erkek-giyim', [PageController::class, 'urunler'])->name('erkek_urunler');
    Route::get('/kadin-giyim', [PageController::class, 'urunler'])->name('kadin_urunler');
    Route::get('/cocuk-giyim', [PageController::class, 'urunler'])->name('cocuk_urunler');
    Route::get('/indirimdekiler', [PageController::class, 'indirimUrunleri'])->name('indirim_urunler');
    Route::get('/urun/detay', [PageController::class, 'urundetay'])->name('urunDetay');


    Route::get('/hakkimizda', [PageController::class, 'hakkimizda'])->name('hakkimizda');
    Route::get('/iletisim', [PageController::class, 'iletisim'])->name('iletisim');

    Route::get('/sepet', [PageController::class, 'cart'])->name('sepet');
});


