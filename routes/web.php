<?php

use Illuminate\Support\Facades\Route;

//IMPORT THE CONTROLLER FIRST
use App\Http\Controllers\StockExchangeController;
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
/* NON_ADMIN - HOME PAGE*/
Route::get('/', function () {
    return view('welcome');
});

/* NON_ADMIN - ABOUT PAGE*/
Route::get('/about', function () {
    return view('about');
});

/* NON_ADMIN - RETRIVE ALL COMPANY LIST */
Route::get('/stocks/index', [StockExchangeController::class, 'index'])->name('index');

Route::get('/stocks/create', [StockExchangeController::class, 'create'])->name('create');

/* NON_ADMIN - SEE DETAILS OF SELECTED SHARE'S COMPANY*/
Route::get('/stocks/show/{stock}', [StockExchangeController::class, 'show'])->name('show');
