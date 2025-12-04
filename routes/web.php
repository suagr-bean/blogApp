<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentController;

Route::get("/show",function (){
    return view('show');
}); 
Route::get("/send",function(){
    return view('create');
});
Route::get("/login",function (){
 return view('login');
})->name("login");
Route::post("/login",[RegisterController::class,"log"]);

Route::get('register',function (){
    session()->forget('success');
    return view("register");
})->name("register.now");
Route::post("/register",[RegisterController::class,"reg"]);
Route::get('/blog', [BlogController::class, 'read'])->name("blog");
Route::get('/home',[BlogController::class,'read']);
Route::post('/create', [BlogController::class, 'creates']);
Route::get('/delete',[BlogController::class,'delete']);
Route::match(['get','post'],'/update',[BlogController::class,'update']);
Route::post('/change ',[BlogController::class,"change"]);
Route::post('/text',[CommentController::class,'createComment']);
   

