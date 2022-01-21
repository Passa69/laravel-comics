<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('pages.home');
}) -> name('home');

Route::get('action', function () {
    return view('pages.action');
}) -> name('action');
