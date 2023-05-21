<?php

use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/registration', [UserController::class, 'registration'])->name('registration');

Route::get('/', [PageController::class, 'getMainPage'])->name('main');
Route::get('/about', [PageController::class, 'getAboutPage'])->name('about');
Route::get('/search', [PageController::class, 'getSearchPage'])->name('search');
Route::get('/result', [PageController::class, 'getSearchResultPage'])->name('result');
Route::get('/history', [PageController::class, 'getHistoryPage'])->name('history');
Route::get('/tariffs', [PageController::class, 'getTariffsPage'])->name('tariffs');

Route::get('/get-tariffs', [PageController::class, 'getTariffsPage'])->name('get-tariffs');

Route::post('/detect-faces', [ImageController::class, 'getDetectFaces'])->name('detect-faces');
