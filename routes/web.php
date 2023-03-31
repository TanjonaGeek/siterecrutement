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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

//Route::view('/candidat/login','Candidat.login');
//Route::view('/candidat/register','Candidat.register');

require __DIR__.'/auth.php';
require __DIR__.'/candidat.php';
require __DIR__.'/recruteur.php';
require __DIR__.'/admin.php';