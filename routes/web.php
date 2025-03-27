<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get("/artisan-seed", function () {
    Artisan::call("db:seed");
    return back();
});

Route::get("/artisan-fresh", function () {
    Artisan::call("migrate:fresh");
    return back();
});

Route::get('/contact', function () {
    return view('contactUs');
});