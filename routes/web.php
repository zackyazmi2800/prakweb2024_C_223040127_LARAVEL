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
    return view('contact', ['x' => 'https://x.com/zacky_2801',
                            'yt' => 'https://x.com/zacky_2801',
                            'ig' => 'https://www.instagram.com/zackyazmi_28/']);
});