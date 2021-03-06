<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\onzeHomosController;
use App\Http\Controllers\reviewController;

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
    return view('home');
});

Route::get('/onzehomos', [onzeHomosController::class, 'show']);

Route::post('/review', [reviewController::class, 'show']);
Route::get('/review', [reviewController::class, 'show']);

Route::post('/sendReview', [reviewController::class, 'sendReview']);
