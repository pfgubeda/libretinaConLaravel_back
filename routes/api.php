<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\libretinaController;
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
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


