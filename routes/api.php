<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\FibonacciController;
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

Route::prefix('fibonacci')->group(function () {
    Route::get('/', [FibonacciController::class, 'index']);
    Route::post('start', [FibonacciController::class, 'start']);
    Route::get('get/{id}', [FibonacciController::class, 'get']);
});


Route::post('login', [LoginController::class, 'login']);

