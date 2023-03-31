<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Recruteur Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/recruteur')->name("recruteur.")->group(function () {

    Route::middleware('isRecruteur')->group(function () {
        Route::view('dashboard','Recruteur.dashboard')
        ->name('dashboard');

    });

require __DIR__.'/auth_recruteur.php';
});
