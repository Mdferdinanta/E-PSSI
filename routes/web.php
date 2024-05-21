<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'title' => 'Home page',
    ]);
});

Route::get('/talents', function () {
    return view('talents', [
        'title' => 'Talents',
    ]);
});

Route::get('/register', function () {
    return view('register', [
        'title' => 'Registration',
    ]);
});

Route::get('/onwatch', function () {
    return view('onwatch', [
        'title' => 'Talents On Watch',
    ]);
});

Route::get('/messages', function () {
    return view('messages', [
        'title' => 'Messages',
    ]);
});

Route::get('/profile', function () {
    return view('profile', [
        'title' => 'Profile',
    ]);
});

Route::get('/signup', function () {
    return view('signup', [
        'title'=> 'Sign Up Page',
    ]);
});

Route::get('/login', function () {
    return view('login', [
        'title'=> 'Log In Page',
    ]);
});