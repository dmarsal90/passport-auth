<?php

use App\Http\Controllers\PassportAuthController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

//Route::post('register', [\App\Http\Controllers\PassportAuthController::class, 'register']);
//Route::post('login', [\App\Http\Controllers\PassportAuthController::class, 'login']);
//Route::post('logout', [\App\Http\Controllers\PassportAuthController::class, 'logout']);

Route::controller(PassportAuthController::class)->group(function(){
    Route::get('register', 'register');
    Route::get('login', 'login');
    Route::get('logout', 'logout');
});
