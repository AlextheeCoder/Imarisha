<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\FarmerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProviderController;
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
Route::get('/farm/profile', [FarmerController::class, 'farm_profile'])->middleware('checkRole:farmer,admin');

//Farmer view success
Route::get('/farmer/success', [ProfileController::class,'viewSuccess'])->middleware('checkRole:farmer,admin');

//Farmer view report
Route::get('/farmer/report', [ProfileController::class, 'viewReport'])->middleware('checkRole:farmer,admin');

//Provider view info
Route::get('/providers/info', [ProviderController::class,'providers_info']);

//Admin Panel
Route::get('/pemu-admin',[AdminController::class,'index'])->middleware('checkRole:admin');

//Show provider profile
Route::get('/providers/profile', [ProviderController::class,'provider_profile']);


//Store Provider profile
Route::post('/provider/store', [ProviderController::class,'provider_store']);

//Store Financial Provider info
Route::post('/provider/financial/store', [ProviderController::class,'financial_provider']);

//Store Inputs Provider info
Route::post('/provider/inputs/store', [ProviderController::class,'inputs_provider']);

//Store Inputs Provider info
Route::post('/provider/labor/store', [ProviderController::class,'labor_provider']);

