<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\BlogController;

Route::get("/send",function(){
    return view("create");
});

Route::get('/blog', [BlogController::class, 'read']);
Route::post('/create', [BlogController::class, 'creates']);
Route::get('/delete',[BlogController::class,'delete']);

