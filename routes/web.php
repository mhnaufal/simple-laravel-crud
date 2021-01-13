<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Http;

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

/* API */
Route::get('/apitest', function () {
    $response = Http::get('https://njajal.azurastore.id/api');
    // return $response['message'];
    // return view('apitest', ['api' => $response['message']]);
    // return view('apitest', ['api' => $response]);

    /* I'm sorry but you need to use your own apikey */
    $apikey = '';
    $s = 'Mission Impossible';
    $response2 = Http::get("http://www.omdbapi.com/?apikey={$apikey}&s={$s}");
    // return $response2->json();
    // return $response2['Search'][1];
    return view('apitest', [
        'api' => $response2['Search'],
        'apitest' => $response
    ]);
});

/* NON_ADMIN - HOME PAGE */
Route::get('/', function () {
    return view('welcome');
});

/* NON_ADMIN - ABOUT PAGE */
Route::get('/about', function () {
    return view('about');
});

/* USER - IF SOMEONE TRY TO GOT INTO THE CREATE PAGE WITHOUT PERMISSION */
Route::get('/stocks', function () {
    return abort(404);
});

/** READ **/
/* NON_ADMIN - RETRIVE ALL DATA IN THE DATABASE */
Route::get('/stocks/index', [StockExchangeController::class, 'index'])->name('index');

/* NON_ADMIN - SEE DETAILS OF THE SELECTED DATA */
Route::get('/stocks/show/{stock}', [StockExchangeController::class, 'show'])->name('show');
/** READ**/

/** CREATE **/
/* ADMIN - SHOW THE FORM FOR INPUTING A NEW DATA */
Route::get('/stocks/create', [StockExchangeController::class, 'create'])->name('create');

/* ADMIN - STORE THE DATA FROM 'create' FORM */
Route::post('/stocks', [StockExchangeController::class, 'store'])->name('store');
/** CREATE **/

/** UPDATE **/
/* ADMIN - SHOW THE FORM FOR EDITING THE SELECTED DATA*/
Route::get('/stocks/{stock}/edit', [StockExchangeController::class, 'edit'])->name('edit');

/* ADMIN - STORE THE EDITED DATA FROM 'edit' FORM */
Route::patch('/stocks/{stock}', [StockExchangeController::class, 'update'])->name('update');
/** UPDATE **/

/** DELETE **/
/* ADMIN - DELETE SELECTED DATA */
Route::delete('/stocks/{stock}', [StockExchangeController::class, 'destroy'])->name('delete');
/** DELETE **/