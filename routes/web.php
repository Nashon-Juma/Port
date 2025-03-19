<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\MessageController;

use Illuminate\Support\Facades\Auth;
use App\Models\User;


Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('service');
});

Route::get('/zungumza', function () {
    return view('contact');
});

Route::post('/send-message', [MessageController::class, 'sendMessage'])->name('send.message');

Route::get('/pillars-and-steps-of-ux-research', function () {
    return view('extras.pillars-and-steps-of-ux-research');
});

Route::get('/ui-ux-design', function () {
    return view('extras.ui-ux-design');
});

Route::get('post/{slug}', function () {
    return view('extras.ui-ux-design');
});

Route::get('/ui-ux-in-health-domain', function () {
    return view('extras.ui-ux-in-health-domain');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
