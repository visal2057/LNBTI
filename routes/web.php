<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/aboutus', function () {
    return view('aboutus');
});
Route::get('/contact', function () { 
    return view('contact'); 
});
Route::get('/home', function () { 
    return view('home'); 
});
Route::get('/home2', function () { 
    return view('home2'); 
});
Route::get('/action', function () { 
    return view('action'); 
});
Route::get('history', function () { 
    return view('history'); 
});
Route::get('/romantic', function () { 
    return view('romantic'); 
});
Route::get('/sci-fi', function () { 
    return view('sci-fi'); 
});
Route::get('/cart', function () { 
    return view('cart'); 
});
Route::get('/login', function () { 
    return view('login'); 
});

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index']);