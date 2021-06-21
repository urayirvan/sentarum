<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;


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

Route::middleware(['auth','checkrole:admin,atasan,staf'])->group(function(){    

    //Halaman Dashboard
    Route::get('/home',[DashboardController::class,'home']);

});