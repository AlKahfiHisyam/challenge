<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Barcode',\App\Http\Controllers\BarcodeCTRL::class . '@barcode');

Route::post('/Customer/SaveCus1',\App\Http\Controllers\CustomerController::class . '@store');

Route::post('/Barang',\App\Http\Controllers\BarcodeController::class . '@create');

Route::post('/books',\App\Http\Controllers\BookController::class . '@createBook');