<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get("/artisan-seed", function () {
    Artisan::call("db:seed");
    return back();
});

Route::get("/artisan-fresh", function () {
    Artisan::call("migrate:fresh");
    return back();
});

Route::get('/page_2', function () {
    return view('page_1');
})->name('page2');