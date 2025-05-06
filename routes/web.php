<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SingleActionController;

Route::get('/',[HomeController::class, 'index'])->name('home');

Route::get('single-action', SingleActionController::class);

Route::resource('blog', BlogController::class);

Route::get('contact', [ContactController::class, 'index'])->name('contact.index');
Route::post('contact', [ContactController::class, 'handleContact'])->name('contact.submit');

Route::get('file_upload', [FileUploadController::class, 'index'])->name('file.index');
Route::post('file_upload', [FileUploadController::class, 'store'])->name('file.store');
Route::get('file_download', [FileUploadController::class, 'download'])->name('file.download');

Route::fallback(function(){
    return "page is not found";
});


