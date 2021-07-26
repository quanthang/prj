<?php

use App\Models\apartment;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpFoundation\Request;

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



Route::get('/create',[\App\Http\Controllers\ApartmentController::class,'create']);
Route::post('/create',[\App\Http\Controllers\ApartmentController::class,'store']);
Route::get('/list',[\App\Http\Controllers\ApartmentController::class,'index']);
