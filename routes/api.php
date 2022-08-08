<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ControllerLibro;
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

Route::get('libros',[ControllerLibro::class,'index']);
Route::post('libros',[ControllerLibro::class,'store']);
Route::get('libros/{libro}',[ControllerLibro::class,'show']);
Route::put('libros/{libro}',[ControllerLibro::class,'update']);
Route::delete('libros/{libro}',[ControllerLibro::class,'destroy']);