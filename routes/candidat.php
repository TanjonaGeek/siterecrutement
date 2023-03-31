<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Candidat Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/candidat')->name("candidat.")->group(function () {

    Route::middleware('isCandidat')->group(function () {
        Route::view('dashboard','Candidat.dashboard')
        ->name('dashboard');

    });

require __DIR__.'/auth_candidat.php';
});
