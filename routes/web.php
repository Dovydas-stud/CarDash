<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\DB;

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
Route::get('/', [HomeController::class, 'index'])
    ->name('dashboard');

Route::get('/ads', [AdsController::class, 'index'])
    ->name('ads');

Route::get('/ads/{id}', function ($id) {
    $ad = DB::table('ads')
        ->where('id', '=', $id)
        ->get();
    return view('ads_single', compact('ad'));
});

Route::get('/contact', [ContactController::class, 'index'])
    ->name('contact');

Route::post('/contact', [ContactController::class, 'create'])
->name('contact');

Route::middleware(['auth:sanctum', 'verified'])->group(function () {
    Route::get('/ads/create', [AdsController::class, 'add'])
        ->name('ads_create');

    Route::post('/ads/create', [AdsController::class, 'create'])
        ->name('ads_create');
});
