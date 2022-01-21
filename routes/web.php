<?php

use App\Http\Controllers\ListingController;
use App\Http\Controllers\TargetController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [ListingController::class, 'index'])->name('listings');

Route::get('/targets', [TargetController::class, 'index'])->name('targets');
Route::get('/targets/{id}', [TargetController::class, 'delete'])
    ->where(['id'=>'[0-9]+'])
    ->name('targets.delete'); // TODO: replace with an ajax call to the api
Route::get('/targets/form/{id?}', [TargetController::class, 'form'])
    ->where(['id'=>'[0-9]+'])
    ->name('targets.form');
Route::post('/targets/form/{id?}', [TargetController::class, 'store'])
    ->where(['id'=>'[0-9]+'])
    ->name('targets.store');