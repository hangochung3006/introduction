<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\Detail;
use App\Http\Controllers\CategoryAdmin;


route::get("/", [Welcome::class,"index"])->name("home");

route::get("/chi-tiet/{slug}", [Detail::class,"detail"])->name("detail");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('category', CategoryAdmin::class);
