<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});



// Route: Signin dan Signup
Route::get('/signup', function () {
    return view('signup');
});

Route::get('/signin', function () {
    return view('signin');
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/profile', function () {
    return "Profile Page";
})->middleware(Auth::class);