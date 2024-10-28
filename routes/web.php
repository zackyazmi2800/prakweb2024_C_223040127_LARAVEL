<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about', ['nama' => 'Zacky Azmi']);
});

Route::get('/blog', function () {
    return view('blog');
});

Route::get('/contact', function () {
    return view('contact', ['nama' => 'Zacky Azmi',
                            'email' => 'zackyazmi30@gmail.com',
                            'ig' => 'zackyazmi_28']);
});