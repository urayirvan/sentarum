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
    Route::get('/mn1/{id}/detail',[DashboardController::class,'mn1detail']);
    Route::post('/mn1/{id}/update',[DashboardController::class,'mn1update']);
    Route::get('/mn1/{id}/delete',[DashboardController::class,'mn1delete']);

    //Manajemen Data Bank
    Route::get('/mn2',[DashboardController::class,'mn2']);
    Route::post('/mn2/create',[DashboardController::class,'mn2create']);
    Route::get('/mn2/{id}/edit',[DashboardController::class,'mn2edit']);
    Route::post('/mn2/{id}/update',[DashboardController::class,'mn2update']);

    //Manajemen Data Desa
    Route::get('/mn3',[DashboardController::class,'mn3']);
    Route::post('/mn3/create',[DashboardController::class,'mn3create']);
    Route::get('/mn3/{id}/edit',[DashboardController::class,'mn3edit']);
    Route::post('/mn3/{id}/update',[DashboardController::class,'mn3update']);

    //Manajemen Data Kecamatan
    Route::get('/mn4',[DashboardController::class,'mn4']);
    Route::post('/mn4/create',[DashboardController::class,'mn4create']);
    Route::get('/mn4/{id}/edit',[DashboardController::class,'mn4edit']);
    Route::post('/mn4/{id}/update',[DashboardController::class,'mn4update']);

    //Manajemen Data Kota/Kabupaten
    Route::get('/mn5',[DashboardController::class,'mn5']);
    Route::post('/mn5/create',[DashboardController::class,'mn5create']);
    Route::get('/mn5/{id}/edit',[DashboardController::class,'mn5edit']);
    Route::post('/mn5/{id}/update',[DashboardController::class,'mn5update']);

    //Export PDF
    Route::get('/mn6',[DashboardController::class,'mn6']);
    Route::post('/mn6/custom1',[DashboardController::class,'mn6cst1']);
    Route::post('/mn6/custom2',[DashboardController::class,'mn6cst2']);
    Route::post('/mn6/custom3',[DashboardController::class,'mn6cst3']);

    //Export Excel
    Route::get('/mn7',[DashboardController::class,'mn7']);
    Route::post('/mn7/custom1',[DashboardController::class,'mn7cst1']);
    Route::post('/mn7/custom2',[DashboardController::class,'mn7cst2']);
    Route::post('/mn7/custom3',[DashboardController::class,'mn7cst3']);

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