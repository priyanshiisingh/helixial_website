<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [PagesController::class,'about'])->name('pages.about');
Route::get('/services', [PagesController::class,'service'])->name('pages.service');
Route::get('/service/detail', [PagesController::class,'serviceDetail'])->name('pages.service.detail');
Route::get('/service/alpha-profiling', [PagesController::class,'alphaProfiling'])->name('pages.service.alphaProfiling');
Route::get('/service/cancerFind', [PagesController::class,'cancerFind'])->name('pages.service.cancerFind');
Route::get('/service/cancerDetect', [PagesController::class,'cancerDetect'])->name('pages.service.cancerDetect');
Route::get('/service/dxn1', [PagesController::class,'dxn1'])->name('pages.service.dxn1');
Route::get('/blogs', [PagesController::class,'blog'])->name('pages.blog');
Route::get('/blog/detail', [PagesController::class,'blogDetail'])->name('pages.blog.detail');
Route::get('/contact', [PagesController::class,'contact'])->name('pages.contact');
Route::get('/careers', [PagesController::class,'career'])->name('pages.career');

Route::post('/contact', [HomeController::class,'contact'])->name('contact.submit');

