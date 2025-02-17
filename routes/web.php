<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Welcome;
use App\Http\Controllers\Detail;
use App\Http\Controllers\User;


route::get("/", [Welcome::class,"index"])->name("home");

route::get("/chi-tiet/{slug}", [Detail::class,"detail"])->name("detail");

route::get("/danh-muc", [User::class,"category"])->name("category");
route::get("/thong-tin", [User::class,"information"])->name("information");
route::get("/danh-gia", [User::class,"review"])->name("review");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
