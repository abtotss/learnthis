<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home', [
        'greeting' == 'Hello',
        'company' == 'HussleTools',
        'speech' == 'We are a great Company selling Digital tools online'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});
