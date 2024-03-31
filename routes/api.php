<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DistrictController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
Route::get('/getDivision',[DistrictController::class,'getDivision']);
Route::get('/getDistrict/{division_id}',[DistrictController::class,'getDistrict']);
Route::get('/getUpazila/{district_id}',[DistrictController::class,'getUpazila']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
