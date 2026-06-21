<?php

use Illuminate\Support\Facades\Route;
// Controller Path
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', function () {
//     return view('home');
// });

Route::view('/home','home');

// For dynamic data
// Route::get('/about/{name}',function($name){
//     echo $name;
//     return view('about');
// });

// or

Route::get('/about/{name}',function($name){
    return view('about',['name'=>$name]);
});

// Route::redirect('/home','/');

// For Controller
Route::get('user',[UserController::class,'getUser']);
Route::get('about',[UserController::class,'aboutUser']);
Route::get('user/{name}',[UserController::class,'getUserName']);

Route::get('admin',[UserController::class,'adminlogin']);
// or
// Route::view('admin','admin.login');

Route::get('home',[UserController::class,'userhome']);