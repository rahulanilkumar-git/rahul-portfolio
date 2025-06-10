<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');
Route::view('/projects', 'projects');
Route::view('/contact', 'contact');
