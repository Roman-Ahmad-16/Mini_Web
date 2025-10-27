<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\FrontController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceCategoryController;










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













Route::get('/dashboard', function () {
    return view('admin.dashboard.layouts.master');
});





Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/edit/{name}', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contact/update', [ContactController::class, 'update'])->name('contact.update');
Route::post('/contact/delete', [ContactController::class, 'delete'])->name('contact.delete');
// front
Route::post('/contact/submit', [FrontController::class, 'store'])->name('front.contact.store');











////////// SERVICE //////////////////
Route::get('/services', [ServiceController::class, 'index'])->name('service.index');
Route::get('/service/create', [ServiceController::class, 'create'])->name('service.create');
Route::post('/service/store', [ServiceController::class, 'store'])->name('service.store');
Route::get('/service/edit/{id}', [ServiceController::class, 'edit'])->name('service.edit');
Route::get('/servic/detail/{id}', [ServiceController::class, 'detail'])->name('servic.detail');
Route::post('/service/update/{id}', [ServiceController::class, 'update'])->name('service.update');
Route::get('/service/delete/{id}', [ServiceController::class, 'delete'])->name('service.delete');



////////// SERVICE CATEOGORIES //////////////////
Route::get('service_categories', [ServiceCategoryController::class, 'index'])->name('service_categories.index');
Route::get('service_categories/create', [ServiceCategoryController::class, 'create'])->name('service_categories.create');
Route::post('service_categories', [ServiceCategoryController::class, 'store'])->name('service_categories.store');
Route::get('service_categories/{id}/edit', [ServiceCategoryController::class, 'edit'])->name('service_categories.edit');
Route::get('service_category/detail/{id}', [ServiceCategoryController::class, 'detail'])->name('service_category.detail');
Route::post('service_categories/{id}', [ServiceCategoryController::class, 'update'])->name('service_categories.update');
Route::delete('service_categories/{id}', [ServiceCategoryController::class, 'delete'])->name('service_categories.delete');