<?php

use App\Http\Controllers\AiringController;
use App\Http\Controllers\MovieController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/movie', [MovieController::class, 'index']);
Route::get('/movie/{id}', [MovieController::class, 'show']);
Route::get('/movie/{id}/airings', [MovieController::class, 'getRelatedAirings']);
Route::post('/movie', [MovieController::class, 'store']);
Route::put('/movie/{id}', [MovieController::class, 'update']);
Route::delete('/movie/{id}', [MovieController::class, 'destroy']);

Route::get('/airing', [AiringController::class, 'index']);
Route::get('/airing/{id}', [AiringController::class, 'show']);
Route::post('/airing', [AiringController::class, 'store']);
Route::put('/airing/{id}', [AiringController::class, 'update']);
Route::delete('/airing/{id}', [AiringController::class, 'destroy']);
