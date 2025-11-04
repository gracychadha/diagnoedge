<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.pages.welcome');
});
Route::get('/about-us' , function(){
    return view('website.pages.about-us');
})->name('about-us');
