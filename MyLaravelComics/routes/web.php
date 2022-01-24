<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'Comics@fumetti') -> name('home');

Route::get('action', function () {
    return view('pages.action');
}) -> name('action');
