<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::prefix('/zainmada/recrutement/madagascar/administrateur')->name("admin.")->group(function () {

    Route::middleware('isAdmin')->group(function () {
        Route::view('dashboard','Admin.dashboard')
        ->name('dashboard');

    });

require __DIR__.'/auth_admin.php';
});
