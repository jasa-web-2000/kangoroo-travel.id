<?php

use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Artisan;
use App\Http\Controllers\SitemapController;
use App\Http\Controllers\ThumbnailController;
use App\Http\Controllers\LandingPageController;

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

Route::get('/image/{text}/thumbnail.jpg', function ($text) {
    return ThumbnailController::generateThumbnail($text);
})->name('thumbnail');



Route::controller(LandingPageController::class)->group(function () {

    Route::get('/optimize-clear', function () {
        Artisan::call('optimize:clear');
        return "Artisan optimize:clear berhasil dijalankan!";
    });

    // Route::prefix('/migrate-fresh')->group(function () {

    //     Route::get('/', function () {
    //         Artisan::call('migrate:fresh');
    //         return "Artisan migrate:fresh berhasil dijalankan!";
    //     });

    //     Route::get('/seeder', function () {
    //         Artisan::call('migrate:fresh --seed');
    //         return "Artisan migrate:fresh --seed berhasil dijalankan!";
    //     });

    //     Route::get('/sumatera-jawa-bali-seeder', function () {
    //         Artisan::call('migrate:fresh --seed --seeder=JawaBaliSeeder');
    //         return "Artisan migrate:fresh --seed --seeder=JawaBaliSeeder berhasil dijalankan!";
    //     });
    // });


    Route::get('/', 'beranda')->name('beranda');
    Route::get('/galeri', 'galeri')->name('galeri');
    Route::get('/kontak', 'kontak')->name('kontak');

    Route::get('/arsip-travel', 'arsipTravel')->name('arsip-travel');
    // Route::get('/arsip-agen', 'arsipAgen')->name('arsip-agen');

    Route::post('/cari-travel', 'cariTravel')->name('cari-travel');
    Route::post('/cari-agen', 'cariAgen')->name('cari-agen');

    Route::prefix('/rute-travel/dari-{asal}/ke-{tujuan}/{asalId}/{tujuanId}')->group(function () {
        Route::get('/', 'jalurRuteTravel')->name('jalur-rute-travel');
        Route::get('/thumbnail.jpg', 'jalurRuteTravel')->name('thumbnail-jalur-rute-travel');
    });

    // Route::prefix('/agen-travel-{asal}/{asalId}')->group(function () {
    //     Route::get('/', 'agenTravel')->name('agen-travel');
    //     Route::get('/thumbnail.jpg', 'agenTravel')->name('thumbnail-agen-travel');
    // });
});


Route::controller(SitemapController::class)->group(function () {
    Route::get('/sitemap.xml', 'static_sitemap');
    // Route::get('/agen-sitemap.xml', 'agen_sitemap')->name('agen-sitemap');
    Route::get('/travel-sitemap.xml', 'travel_sitemap')->name('travel-sitemap');
    Route::get('/{asal}/{asalId}/single-travel-sitemap.xml', 'single_travel_sitemap')->name('single-travel-sitemap');
});
