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
Route::get('/checkout', function () { 
    return view('checkout'); 
});
Route::get('/action1', function () { 
    return view('action1'); 
});
Route::get('/action2', function () { 
    return view('action2'); 
});
Route::get('/history1', function () { 
    return view('history1'); 
});Route::get('/history2', function () { 
    return view('history2'); 
});Route::get('/romantic1', function () { 
    return view('romantic1'); 
});Route::get('/romantic2', function () { 
    return view('romantic2'); 
});Route::get('/sci-fi1', function () { 
    return view('sci-fi1'); 
});Route::get('/sci-fi2', function () { 
    return view('sci-fi2'); 
});

use App\Http\Controllers\ContactController;

Route::get('/contact', [ContactController::class, 'index']);