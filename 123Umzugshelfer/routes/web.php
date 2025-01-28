<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('front.home');
})->name('home');

Route::get('/kostenloses-angebot-erhalten', function () {
    return view('front.calculater');
})->name('calculater');

Route::get('/uber-uns-umzug-shelfer', function () {
    return view('front.about');
})->name('about');

Route::get('/artikel', function () {
    return view('front.blog');
})->name('blog');

Route::get('/umzugsservice', function () {
    return view('front.service');
})->name('service');

Route::get('/umzugsunternehmen-berlin', function () {
    return view('front.move');
})->name('move');

Route::get('/umzugsunternehmen-munchen', function () {
    return view('front.munich');
})->name('munich');

Route::get('/mzugsunternehmen-hamburg', function () {
    return view('front.hamburg');
})->name('hamburg');

Route::get('/umzugsunternehmen-hannover', function () {
    return view('front.hannover');
})->name('hannover');

Route::get('/umzugsunternehmen-koln', function () {
    return view('front.Cologne');
})->name('Cologne');

Route::get('/umzugsunternehmen-leipzig', function () {
    return view('front.Leipzig');
})->name('Leipzig');

Route::get('/umzugsunternehmen-kosten', function () {
    return view('front.Kosten');
})->name('Kosten');

Route::get('/umzugsunternehmen-dusseldorf', function () {
    return view('front.dusseldorf');
})->name('dusseldorf');

Route::get('/umzugsunternehmen-frankfurt', function () {
    return view('front.frankfurt');
})->name('frankfurt');

Route::get('/umzugsunternehmen-bremen', function () {
    return view('front.bremen');
})->name('bremen');

Route::get('/umzugsunternehmen-dresden', function () {
    return view('front.dresden');
})->name('dresden');

Route::get('/umzugsunternehmen-essen', function () {
    return view('front.essen');
})->name('essen');

Route::get('/umzugsunternehmen-stuttgart', function () {
    return view('front.stuttgart');
})->name('stuttgart');
