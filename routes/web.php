<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/index' , [FrontController::class,'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'aboutUs'])->name('about-us');
Route::get('/contact-us', [FrontController::class, 'contactus'])->name('contact-us');
