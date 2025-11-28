<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;


    
Route::get("/send",function(){
    return view('create');
});
Route::get("/login",function (){
 return view('login');
})->name("login");
Route::post("/login",[RegisterController::class,"log"]);

Route::get('register',function (){
    return view("register");
})->name("register");
Route::post("/register",[RegisterController::class,"reg"]);
Route::get('/blog', [BlogController::class, 'read'])->name("blog");
Route::post('/create', [BlogController::class, 'creates']);
Route::get('/delete',[BlogController::class,'delete']);
Route::match(['get','post'],'/update',[BlogController::class,'update']);
Route::post('/change ',[BlogController::class,"change"]);
   

