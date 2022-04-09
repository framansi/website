<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OneController;

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
Route::get('/', [OneController::class, 'index'])->name('index');
Route::get('/offline', [OneController::class, 'offline'])->name('offline');
Route::get('/chi-sono', [OneController::class, 'about'])->name('about');
Route::get('/servizi', [OneController::class, 'portfolio'])->name('portfolio.index');
Route::get('/servizi/gestionale-personalizzato', [OneController::class, 'gestionale'])->name('portfolio.gestionale');
Route::get('/servizi/creare-siti-web', [OneController::class, 'website'])->name('portfolio.website');
Route::get('/servizi/sviluppo-ecommerce', [OneController::class, 'ecommerce'])->name('portfolio.ecommerce');
Route::get('/contattami', [OneController::class, 'contact'])->name('contact');
Route::get('/cookie-policy', [OneController::class, 'cookie'])->name('cookie');
Route::post('/contattami/send', [OneController::class,'send'])->name('send');



