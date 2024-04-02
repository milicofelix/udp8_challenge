<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\v1\ClienteController;

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

Route::prefix('v1')->name('api.v1.')->group(function(){
    Route::apiResource('clientes', ClienteController::class);
});

Route::fallback(function () {
    return response()->json([
        'message' => 'Rota não encontrada!'
    ], 404);
})->name('api.fallback.404');
