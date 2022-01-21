<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ListingController;
use App\Http\Controllers\Api\TargetController;
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

Route::prefix('auth')->group(function () {
    Route::post('register', [AuthController::class, 'register']);
    Route::match(['get','post'], 'login', [AuthController::class, 'login'])->name('login');
});

// authenticated endpoints
Route::middleware('auth:sanctum')->group(function () {
    Route::get('target', [TargetController::class, 'index']);
    Route::post('target', [TargetController::class, 'store']);

    Route::post('listing', [ListingController::class, 'submit']);
});