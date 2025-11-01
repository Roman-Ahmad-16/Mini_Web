<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\ServiceCategoryController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\BCategoryController;







require base_path('routes/frontRoutes.php');


Route::get('/dashboard', function () {
    return view('admin.dashboard.layouts.master');
});


////////// Settings /////////////
Route::get('/setting', [SettingController::class, 'edit'])->name('setting.edit');
Route::post('/setting/update', [SettingController::class, 'update'])->name('setting.update');


/////////// Contact ////////////////
Route::get('/contact', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact/create', [ContactController::class, 'create'])->name('contact.create');
Route::post('/contact/store', [ContactController::class, 'store'])->name('contact.store');
Route::get('/contact/edit/{name}', [ContactController::class, 'edit'])->name('contact.edit');
Route::post('/contact/update', [ContactController::class, 'update'])->name('contact.update');
Route::post('/contact/delete', [ContactController::class, 'delete'])->name('contact.delete');


////////// SERVICE //////////////////
Route::get('/service', [ServiceController::class, 'index'])->name('service.index');
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


////////// Slider Controller ///////////////
Route::get("/slider", [SliderController::class, "index"])->name("admin.slider");
Route::get("/slider/add", [SliderController::class, "add"])->name("admin.slider.add");
Route::post("/slider/store", [SliderController::class, "store"])->name("admin.slider.store");
Route::delete("/slider/delete/{id}/", [SliderController::class, "destroy"])->name("admin.slider.delete");
Route::get("/slider/edit/{id}/", [SliderController::class, "edit"])->name("admin.slider.edit");
Route::post("/slider/update/{id}/", [SliderController::class, "update"])->name("admin.slider.update");




//////////////// Blog //////////////////
Route::get('/blogs', [BlogController::class, 'index'])->name('blog.index');
Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
Route::post('/blogs/store', [BlogController::class, 'store'])->name('blog.store');
Route::get('/blogs/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
Route::post('/blogs/update/{id}', [BlogController::class, 'update'])->name('blog.update');
Route::delete('/blogs/delete/{id}', [BlogController::class, 'delete'])->name('blog.delete');



////////////////// Blog Category //////////////////
Route::get('/blog-categories', [BCategoryController::class, 'index'])->name('blog_category.index');
Route::get('/blog-categories/create', [BCategoryController::class, 'create'])->name('blog_category.create');
Route::post('/blog-categories/store', [BCategoryController::class, 'store'])->name('blog_category.store');
Route::get('/blog-categories/edit/{id}', [BCategoryController::class, 'edit'])->name('blog_category.edit');
Route::post('/blog-categories/update/{id}', [BCategoryController::class, 'update'])->name('blog_category.update');
Route::get('/blog-categories/detail/{id}', [BCategoryController::class, 'detail'])->name('blog_category.detail');
Route::delete('/blog-categories/delete/{id}', [BCategoryController::class, 'delete'])->name('blog_category.delete');