<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/layout.home', function () {
    return view('layout.home');
});

Route::get('/pages.projects', function () {
    return view('pages.projects');
});
