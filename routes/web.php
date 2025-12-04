<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\CommentController;

Route::get("/person",function (){
    return view("person");
});
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
Route::get('/home/{number}', [BlogController::class, 'read']);
Route::get('/home',[BlogController::class,'read'])->name("homepage");
Route::post('/create', [BlogController::class, 'creates']);
Route::get('/delete',[BlogController::class,'delete']);
Route::match(['get','post'],'/update',[BlogController::class,'update']);
Route::post('/change ',[BlogController::class,"change"]);
Route::post('/comment',[CommentController::class,'createComment']);
Route::post('/layout',[RegisterController::class,"layout"]);
Route::post('/addComment',[CommentController::class,"createcomment"]);

