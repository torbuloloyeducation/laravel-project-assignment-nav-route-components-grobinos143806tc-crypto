<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome')->name('home');
Route::view('/about', 'about')->name('about');
Route::view('/contact', 'contact')->name('contact');
Route::view('/services', 'services')->name('services');
Route::view('/showcases', 'showcases')->name('showcases');
Route::view('/blog', 'blog')->name('blog');
