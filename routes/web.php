<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\UserController;


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

/*Route::get('/', function () {
    return view('welcome');
});*/

//Login
Route::get('/',[AuthController::class,'login'])->name('login');
Route::post('/postlogin',[AuthController::class,'postlogin']);
Route::get('/logout',[AuthController::class,'logout']);

Route::middleware(['auth','checkrole:admin'])->group(function(){    

    //Halaman Dashboard
    Route::get('/home',[DashboardController::class,'home']);

    //Manajemen Data TPM
    Route::get('/ls1',[DashboardController::class,'ls1']);
    Route::get('/mn1',[DashboardController::class,'mn1']);
    Route::post('/mn1/create',[DashboardController::class,'mn1create']);
    Route::get('/mn1/{id}/edit',[DashboardController::class,'mn1edit']);
    Route::post('/mn1/{id}/update',[DashboardController::class,'mn1update']);
    Route::get('/mn1/{id}/delete',[DashboardController::class,'mn1delete']);

    //Manajemen Data Bank
    Route::get('/mn2',[DashboardController::class,'mn2']);
    Route::post('/mn2/create',[DashboardController::class,'mn2create']);
    Route::get('/mn2/{id}/edit',[DashboardController::class,'mn2edit']);
    Route::post('/mn2/{id}/update',[DashboardController::class,'mn2update']);

    //User Management
    Route::get('/user',[UserController::class,'index']);
    Route::get('/userinput',[UserController::class,'userinput']);
    Route::post('/user/create',[UserController::class,'create']);
    Route::get('/user/{id}/edit',[UserController::class,'edit']);
    Route::post('/user/{id}/update',[UserController::class,'update']);
    Route::get('/user/{id}/delete',[UserController::class,'delete']);
    Route::get('/user/{id}/detail',[UserController::class,'detail']);
    Route::get('/user/{id}/profil',[UserController::class,'profil']);
    Route::post('/user/{id}/updateprofil',[UserController::class,'updateprofil']);  

});