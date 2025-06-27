<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

Route::get('/', function () {
    return view('welcome');
});

Route::view('/about', 'about');
Route::view('/projects', 'projects');
//Route::view('/contact', 'contact');
Route::get('/contact', [ContactController::class, 'showForm']);
Route::post('/contact', [ContactController::class, 'sendForm']);
Route::view('/thank-you', 'thank-you');
