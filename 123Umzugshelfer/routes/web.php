<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/kostenloses-angebot-erhalten', function () {
    return view('front.calculater');
});

Route::get('/uber-uns-umzug-shelfer', function () {
    return view('front.about');
})->name('about');

Route::get('/artikel', function () {
    return view('front.blog');
})->name('blog');

Route::get('/umzugsservice', function () {
    return view('front.service');
})->name('service');
