<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SectionController;
use App\Http\Controllers\SerieController;

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


Route::group(['prefix' => 'v1', 'middleware' => ['cors', 'auth.basic']], function() {
    Route::post('user/auth', [UserController::class, 'auth']);
});

Route::group(['prefix' => 'v1', 'middleware' => ['cors', 'auth.jwt']], function() {
    Route::get('section/get-all', [SectionController::class, 'getAll']);
    Route::get('serie/get/{id}', [SerieController::class, 'get']);
});
