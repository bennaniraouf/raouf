<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController ; 
use App\Http\Controllers\appealsController ;
use App\Http\Controllers\reqController ;
use App\Http\Controllers\pubController ; 
use App\Http\Controllers\profileController ; 
use App\Http\Controllers\adminController ;
use App\Http\Controllers\ficheController ;
use App\Http\Controllers\registrationController ; 
use App\Http\Controllers\requestconfirmController;
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

// forms editor

Route::get('edit-page/{id}',[donorController::class,'editInformations']);
Route::put('update-info/{id}',[donorController::class,'infoUpdate']);
Route::get('delete/{id}',[donorController::class,'delete']) ; 
// here ends forms editor
Route::get('tables-data',[donorController::class,'getDonors']) ; 
Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});
Route::post('/login',[UserController::class,'loginPage']) ; 

Route::get('/logout', function () {
    Session::forget('user') ; 
    return redirect('/');
});

Route::get('/LogOut', function () {
    Session::forget('admin') ; 
    return redirect('/');
});
Route::post('/comments', 'CommentController@store');

// admin routing
Route::get('/admin_login', function () {
    return view('admin_login');
});
Route::get('/admin_page', function () {
    return view('admin.admin');
});
Route::post('/admin_login',[adminController::class,'adminLogin']) ; 
Route::get('/users-profile', function () {
    return view('admin.users-profile');
});
route::view("fiche",'admin.fiche');
Route::post('/fiche',[ficheController::class,'addtofiche']) ;
Route::get('admin_page',[adminController::class,'showdonors']) ;

route::view("recieversrequests",'admin.recieversrequests');
Route::get('recieversrequests',[requestconfirmController::class,'afficherdemande']) ;


//here is the registration for receivers routing
Route::view('/pages-register','admin.pages-register' ); 
Route::post('/pages-register',[recieversController::class,'createAccount']) ; 

Route::get('/registration', function () {
    return view('registration');
});
Route::get('userSpace',function(){
    return view('userSpace') ; 
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


//reciever requests
route::view("request",'request');
Route::post('request',[reqController::class,'addreq']) ;
Route::get('request',[reqController::class,'showrequests']) ;


route::view("settings",'settings');

//index pub appeals
Route::get('/',[pubController::class,'show']) ;

//bloodbank for reciever
route::view("bloodbank",'bloodbankreciever');

//reciever
route::view("settings",'settings');
route::view("reciever_login",'reciever_login');
route::view("registration_recievers",'registration_recievers');
Route::post('registration_recievers',[profileController::class,'addreciever']) ;
Route::post('login_reciever',[profileController::class,'loginReciever'])->name('login_reciever') ;
Route::get('/recieverpage',[profileController::class,'recieverpage']) ;
Route::get('/logout',[profileController::class,'logout']) ;

//giver
/*
Route::post('registration',[registrationController::class,'add']) ;
route::get('/appointement/{id}',[appointementController::class])
route::post('appointement',[donorController::class,'sendAppointement']);
*/