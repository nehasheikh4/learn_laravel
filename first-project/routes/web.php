<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::view('/about', view: 'about');
Route::view('/contact', view: 'contact');