<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MovieController;

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

Route::prefix('/favorites')->group(function () {
        Route::get('/', [UserController::class, 'favorite']);
        Route::post('/{id}', [UserController::class, 'AddFavorite']);
        Route::put('/{id}/update', [UserController::class, 'update']);
    });

Route::prefix('/movies')->group(function () {
        Route::get('/', [MovieController::class, 'index']);
        Route::post('/save', [MovieController::class, 'save']);
        Route::get('/{movie}', [MovieController::class, 'find']);
        Route::put('/{id}/update', [MovieController::class, 'update']);
    });