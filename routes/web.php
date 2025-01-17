<?php

use Illuminate\Support\Facades\Route;

Route::get('/home', function () {
    return view('home');
});

Route::get('/register', function () {
    return 'Registration Page Coming Soon!';

});

Route::get('/about', function () {
    return 'About page!';

})->name("about");

Route::get('create-account', function () {
    return view('create-account');
});

Route::get('/login-account', function () {
    return view('login-account'); 
}); 

Route::get('/confirmation', function () {
    return view('confirmation'); 
});

