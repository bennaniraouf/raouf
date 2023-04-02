<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ; 
use App\Http\Controllers\appealsController ;
use App\Http\Controllers\reqController ; 

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

Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'loginPage']) ; 
Route::get('/admin', function () {
    return view('admin.admin');
});
Route::get('/pages-register', function () {
    return view('admin.pages-register');
});
Route::get('/users-profile', function () {
    return view('admin.users-profile');
});
Route::get('/registration', function () {
    return view('registration');
});

//here start raouf's work 
Route::get('/inscription',function(){
    return view('inscription') ; 
}) ;

Route::post('inscription',[inscController::class,'logto']) ;

Route::get('/inscription1',function(){
    return view('inscription1') ; 
}) ;

Route::post('inscription1',[inscripController::class,'add']) ;
route::view("reciever",'reciever');

route::view("appeal",'appeal');
Route::post('appeal',[appealsController::class,'addpost']) ;
Route::get('appeal',[appealsController::class,'viewform']) ;
Route::get('appeal',[appealsController::class,'index']) ;
//appeal edit and delete
Route::get('clickedit/{id}',[appealsController::class,'editfunction']) ;
Route::post('/update/{id}',[appealsController::class,'updatefunc']) ;
Route::get('clickdelete/{id}',[appealsController::class,'deletefunction']) ;



route::view("request",'request');
Route::post('request',[reqController::class,'addreq']) ;


route::view("settings",'settings');
