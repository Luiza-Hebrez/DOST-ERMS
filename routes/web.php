<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return 'Registration Page Coming Soon!';
});