<?php

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

Route::get('notebook', [\App\Http\Controllers\NotebookController::class, 'index']);
Route::post('notebook', [\App\Http\Controllers\NotebookController::class, 'store']);
Route::get('notebook/{notebook}', [\App\Http\Controllers\NotebookController::class, 'show']);
Route::post('notebook/{notebook}', [\App\Http\Controllers\NotebookController::class, 'update']);
Route::delete('notebook/{notebook}', [\App\Http\Controllers\NotebookController::class, 'destroy']);
