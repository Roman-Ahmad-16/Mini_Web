<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;

Route::get('/service/detail', function () {
    return view('front.service_detail');
});

Route::get('/', [FrontController::class, 'index_1'])->name('front.index_1');
Route::get('/index_3', [FrontController::class, 'index_3'])->name('front.index_3');
Route::get('/index_4', [FrontController::class, 'index_4'])->name('front.index_4');
Route::get('/index_5', [FrontController::class, 'index_5'])->name('front.index_5');
Route::get('/index_6', [FrontController::class, 'index_6'])->name('front.index_6');
Route::get('/index_7', [FrontController::class, 'index_7'])->name('front.index_7');
Route::get('/index_8', [FrontController::class, 'index_8'])->name('front.index_8');
Route::get('/index_9', [FrontController::class, 'index_9'])->name('front.index_9');
Route::get('/index_10', [FrontController::class, 'index_10'])->name('front.index_10');
Route::get('/index_11', [FrontController::class, 'index_11'])->name('front.index_11');
Route::get('/index_12', [FrontController::class, 'index_12'])->name('front.index_12');
Route::get('/index_13', [FrontController::class, 'index_13'])->name('front.index_13');
Route::get('/index_14', [FrontController::class, 'index_14'])->name('front.index_14');
Route::get('/index_15', [FrontController::class, 'index_15'])->name('front.index_15');
Route::get('/index_16', [FrontController::class, 'index_16'])->name('front.index_16');
Route::get('/index_17', [FrontController::class, 'index_17'])->name('front.index_17');
Route::get('/index_18', [FrontController::class, 'index_18'])->name('front.index_18');
Route::get('/index_19', [FrontController::class, 'index_19'])->name('front.index_19');
Route::get('/accounts', [FrontController::class, 'accounts'])->name('front.accounts');

Route::get('/appointment', [FrontController::class, 'appointment'])->name('front.appointment');





Route::get('/about-us', [FrontController::class, 'aboutus'])->name('about-us');
Route::get('/services', [FrontController::class, 'services'])->name('front.services');
Route::get('/contact-us', [FrontController::class, 'contactus'])->name('contact-us');
Route::get('/pages', [FrontController::class, 'pages'])->name('pages');