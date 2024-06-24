<?php

use App\Http\Controllers\DoctorController;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('getdoctortime/{id}',[HomeController::class,'getdoctortime']);
Route::get('getdoctortimeByDate/{id}/{date}',[HomeController::class,'getdoctortimeByDate']);
Route::get('searchDoctor',[DoctorController::class,'searchDoctor']);
Route::get('searchSpeciality',[DoctorController::class,'searchSpeciality']);
Route::get('getdoctortimeByNameAndSpeciality',[HomeController::class,'getdoctortimeByNameAndSpeciality']);
