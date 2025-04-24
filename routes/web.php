<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PagesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class,'index'])->name('home');
Route::get('/about', [PagesController::class,'about'])->name('pages.about');
Route::get('/services', [PagesController::class,'service'])->name('pages.service');
Route::get('/service/detail', [PagesController::class,'serviceDetail'])->name('pages.service.detail');
Route::get('/blogs', [PagesController::class,'blog'])->name('pages.blog');
Route::get('/blog/detail', [PagesController::class,'blogDetail'])->name('pages.blog.detail');
