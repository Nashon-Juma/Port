<?php

use Illuminate\Support\Facades\Route;

Route::get('/blog', function () {
    return view('blog');
});
Route::get('/', function () {
    return view('index');
});
Route::get('/client', function () {
    return view('client');
});
