<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.pages.welcome');
})->name('home');
Route::get('/about-us' , function(){
    return view('website.pages.about-us');
})->name('about-us');

Route::get('/contact-us' , function(){
    return view('website.pages.contact-us');
})->name('contact-us');



Route::get('/appointment' , function(){
    return view('website.pages.appointment');
})->name('appointment');