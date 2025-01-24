<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
});

Route::get('/kostenloses-angebot-erhalten', function () {
    return view('front.calculater');
});

Route::get('/2/kostenloses-angebot-erhalten', function () {
    return view('front.calculater_page_2');
});

Route::get('/3/kostenloses-angebot-erhalten', function () {
    return view('front.fixed_price');
});
