<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\v1\categoriaController;

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
Route::get('v1/categoria', [categoriaController::class, 'getAll']);
Route::get('v1/categoria/{id}', [categoriaController::class, 'getItem']);

Route::post('v1/categoria', [categoriaController::class, 'store']);


Route::put('v1/categoria/{id}', [categoriaController::class, 'update']);
Route::patch('v1/categoria/{id}', [categoriaController::class, 'patchUpdate']);

Route::delete('v1/categoria/{id}', [categoriaController::class, 'delete']);