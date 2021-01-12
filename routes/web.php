<?php

use Illuminate\Support\Facades\Route;

//IMPORT THE CONTROLLER FIRST//
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

/* NON_ADMIN - HOME PAGE */

Route::get('/', function () {
    return view('welcome');
});

/* NON_ADMIN - ABOUT PAGE */
Route::get('/about', function () {
    return view('about');
});

/* NON_ADMIN - RETRIVE ALL COMPANIES LIST */
Route::get('/stocks/index', [StockExchangeController::class, 'index'])->name('index');

/* ADMIN - GO TO INPUT NEW COMPANY FORM AND INPUT IT INTO THE DATABASE */
Route::get('/stocks/create', [StockExchangeController::class, 'create'])->name('create');

/* ADMIN - SAVE THE FORM AFTER USER INPUT IT */
Route::post('/stocks', [StockExchangeController::class, 'store'])->name('store');

/* USER - IF SOMEONE TRY TO GOT INTO THE CREATE PAGE WITHOUT PERMISSION */
Route::get('/stocks', function () {
    return abort(404);
});

/* ADMIN - EDIT EXISTING COMPANY DATA */
Route::get('/stocks/{stock}/edit', [StockExchangeController::class, 'edit'])->name('edit');

/* NON_ADMIN - SEE DETAILS OF SELECTED STOCK'S COMPANY*/
Route::get('/stocks/show/{stock}', [StockExchangeController::class, 'show'])->name('show');

Route::patch('/stocks/{stock}', [StockExchangeController::class, 'update'])->name('update');

Route::delete('/stocks/{stock}', [StockExchangeController::class, 'destroy'])->name('delete');