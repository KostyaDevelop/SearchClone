<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => 'auth/'], function () {
    Route::post('login', [AuthController::class, 'login'])->name('auth_login');
    Route::get('logout', [AuthController::class, 'logout'])->name('auth_logout');
    Route::post('register', [AuthController::class, 'register'])->name('auth_register');
});

Route::get('/', [PageController::class, 'getMainPage'])->name('main');
Route::get('/about', [PageController::class, 'getAboutPage'])->name('about');
Route::get('/search', [PageController::class, 'getSearchPage'])->name('search');
Route::get('/result', [PageController::class, 'getSearchResultPage'])->name( 'result');
Route::get('/history', [PageController::class, 'getHistoryPage'])->name('history');
Route::get('/history-one-{set_id}', [PageController::class, 'getHistoryOnePage'])->name('history_one');
Route::get('/tariffs', [PageController::class, 'getTariffsPage'])->name('tariffs');
Route::get('/auth', [PageController::class, 'getAuthPage'])->name('auth');
Route::get('/registration', [PageController::class, 'getRegistrationPage'])->name('registration');
Route::get('/personal-cabinet', [PageController::class, 'getPersonalCabinetPage'])->name('personal_cabinet');

Route::get('/get-tariffs', [PageController::class, 'getTariffsPage'])->name('get-tariffs');

Route::post('/detect-faces', [ImageController::class, 'getDetectFaces'])->name('detect-faces');
