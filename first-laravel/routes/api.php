<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SortController;
use App\Http\Controllers\PlaceNumberController;
use App\Http\Controllers\HumanToProgrammingController;
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

Route::get("/sort-string/{s}",[SortController::class,'sortString']);
Route::get("/correct-place/{num}",[PlaceNumberController::class,'placeNumber']);
Route::post("/convert-string",[HumanToProgrammingController::class,'convertString']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
