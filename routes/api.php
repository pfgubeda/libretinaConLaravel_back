<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\libretinaController;
use App\Http\Controllers\api\notaController;
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
Route::prefix('libretina')->group(function () {
    Route::get('/', [libretinaController::class, 'getAll']);
    Route::get('/{id}', [libretinaController::class, 'getOne']);
    Route::post('/', [libretinaController::class, 'create']);
    Route::delete('/{id}', [libretinaController::class, 'delete']);
});
Route::prefix('nota')->group(function () {
    Route::get('/{id}', [notaController::class, 'getNotasIdLibretina']);
    Route::get('/{id}/{fecha}', [notaController::class, 'getNotasIdLibrretinaFecha']);
    Route::post('/{id}/{fecha}', [notaController::class, 'addNota']);
    Route::delete('/{id}', [notaController::class, 'deleteNota']);
});
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


