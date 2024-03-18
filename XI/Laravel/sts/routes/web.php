<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/tentang-kami', function () {
    return view('tentang');
});

Route::get('/kontak-kami', function () {
    return view('kontak');
});