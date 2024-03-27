<?php

use App\Http\Controllers\OrderController;
use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {return view('index');
});
Route::get('/index', function () {return view('index');
});
Route::get('/about', function () {return view('about');
});
Route::get('/services', function () {return view('service');
});
Route::get('/contact', function () {return view('contact');
});
Route::get('/pillars-and-steps-of-ux-research', function () {return view('pillars-and-steps-of-ux-research');
});
Route::get('/ui-ux-design', function () {return view('ui-ux-design');
});
Route::get('/ui-ux-in-health-domain', function () {return view('ui-ux-in-health-domain');
});
