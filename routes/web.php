<?php

use App\Http\Controllers\Controller;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[Controller::class, 'index']);

Route::get('/register', [UserController::class, 'register']);

//Store Profile
Route::post('/profile/store', [ProfileController::class, 'store']);

Route::get('/login', [UserController::class, 'login']);

//Storing users in database
Route::post('/users/register', [UserController::class, 'store']);

//Authenticate
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

//Logging users out
Route::post('/logout', [UserController::class, 'logout']);


//Farmer info
Route::get('/farmers/info', [FarmerController::class, 'farmer_info']);


//Farm profile
Route::get('/farm/profile', [FarmerController::class, 'farm_profile']);

//Farmer view success
Route::get('/farmer/success', [ProfileController::class,'viewSuccess']);

//Farmer view report
Route::get('/farmer/report', [ProfileController::class, 'viewReport']);

