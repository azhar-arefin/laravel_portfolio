<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;




Route::get('/admin', function () {
    return view('admin.home');
})->name('dashboard');

route::get('/admin/customer', function () {
    return view('admin.page.customer');
})->name('customer');
route::get('/admin/message', function () {
    return view('admin.page.message');
})->name('message');
Route::get('/admin/help',[HomeController::class,'help'])->name('help');





Route::get('/',[HomeController::class,'index']);


