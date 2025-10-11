<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;

Route::get('/service/detail', function () {
    return view('front.service_detail');
});

Route::get('/', [FrontController::class, 'index'])->name('index');
Route::get('/about-us', [FrontController::class, 'aboutus'])->name('about-us');
Route::get('/index_12', [FrontController::class, 'index_12'])->name('front.index_12');
Route::get('/services', [FrontController::class, 'services'])->name('front.services');
Route::get('/contact-us', [FrontController::class, 'contactus'])->name('contact-us');
Route::get('/pages', [FrontController::class, 'pages'])->name('pages');