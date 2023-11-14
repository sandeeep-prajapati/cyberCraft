<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\newuser;
use App\Http\Controllers\activity;
use App\Http\Controllers\select;



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

Route::get('/registration', function () {
    return view('loginRegi.registration');
});
Route::get('/login', function () {
    return view('loginRegi.login');
});
Route::get('/addChatRoom', function () {
    return view('activity.addChatRoom');
});
Route::get('/addbook', function () {
    return view('activity.uploadbook');
});
Route::get('/report', function () {
    return view('activity.report');
});











Route::post("userRgistration",[newuser::class,'registration']);
Route::post("userLogin",[newuser::class,'login']);
Route::post("addchatroom",[activity::class,'addchatroom']);
Route::post("uploadbookDb",[activity::class,'uploadbookDb']);
Route::post("reportSection",[activity::class,'reportSection']);
Route::post("messageDb",[select::class, 'messageDb']);  




Route::get('/userdashboard',[select::class,'allMessageDashboard']);
Route::get('/maindashboard',[select::class,'maindashboard']);


