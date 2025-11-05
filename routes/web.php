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
Route::get('/doctors' , function(){
    return view('website.pages.doctors');
})->name('doctors');
Route::get('/our-partners', function(){
return view('website.pages.our-partner');
})->name('our-partners');
Route::get('/corporate', function(){
return view('website.pages.corporate');
})->name('corporate');
Route::get('/career', function(){
return view('website.pages.career');
})->name('career');
Route::get('/privacy-policy', function(){
return view('website.pages.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-conditions', function(){
return view('website.pages.terms-conditions');
})->name('terms-conditions');
Route::get('/our-blogs', function(){
return view('website.pages.our-blogs');
})->name('our-blogs');


Route::get('/appointment' , function(){
    return view('website.pages.appointment');
})->name('appointment');