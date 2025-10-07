<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index' , [FrontController::class,'index'])->name('index');