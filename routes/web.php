<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;


Route::get('/', function () {
    return view('ComponentViews.master');
})-> name('home');

Route::get('/login',[UserController::class,'getLogin'])-> name('login');
Route::get('/register',[UserController::class,'getRegister'])-> name('register');


