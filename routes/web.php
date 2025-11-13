<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('website.pages.welcome');
})->name('home');
Route::get('/about-us', function () {
    return view('website.pages.about-us');
})->name('about-us');

Route::get('/contact-us', function () {
    return view('website.pages.contact-us');
})->name('contact-us');
Route::get('/doctors', function () {
    return view('website.pages.doctors');
})->name('doctors');
Route::get('/our-partners', function () {
    return view('website.pages.our-partner');
})->name('our-partners');
Route::get('/corporate', function () {
    return view('website.pages.corporate');
})->name('corporate');
Route::get('/career', function () {
    return view('website.pages.career');
})->name('career');
Route::get('/privacy-policy', function () {
    return view('website.pages.privacy-policy');
})->name('privacy-policy');
Route::get('/terms-conditions', function () {
    return view('website.pages.terms-conditions');
})->name('terms-conditions');
Route::get('/our-blogs', function () {
    return view('website.pages.our-blogs');
})->name('our-blogs');
// route for blog detail page
Route::prefix('/our-blogs')->group(function () {
    Route::get('/blog-details', function () {
        return view('website.pages.blog-details');
    })->name('blog-details');
});
Route::get('/health-package', function () {
    return view('website.pages.health-package');
})->name('health-package');

Route::prefix('/health-package')->group(function () {
    Route::get('/package-details', function () {
        return view('website.pages.health-packages-detail');
    })->name('package-details');
});
Route::get('/appointment', function () {
    return view('website.pages.appointment');
})->name('appointment');

// for dashboard
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->name('admin-panel');
Route::get('/login', function () {
    return view('admin.auth.welcome');
})->name("login");
Route::get('/admin-appointment', function () {
    return view("admin.pages.admin-appointment");
})->name('admin-appointment');
Route::get('/admin-staff', function () {
    return view("admin.pages.admin-staff");
})->name('admin-staff');
Route::get('/admin-profile', function () {
    return view("admin.pages.admin-profile");
})->name('admin-profile');
Route::get('/admin-patient', function () {
    return view('admin.pages.admin-patient');
})->name('admin-patient');
Route::get('/admin-doctor', function () {
    return view('admin.pages.admin-doctor');
})->name('admin-doctor');
Route::get('/website-setting', function () {
    return view('admin.pages.website-setting');
})->name('website-setting');
Route::get('/general-setting', function () {
    return view('admin.pages.general-setting');
})->name('general-setting');
Route::get('/logout', function () {
    return view('admin.pages.logout');
})->name('logout');
Route::get('/test-category', function () {
    return view('admin.pages.test-category');
})->name('category');
Route::get('/pages', function () {
    return view('admin.pages.pages');
})->name('pages');
Route::get('/test-description', function () {
    return view('admin.pages.test-description');
})->name('test-description');
Route::get('/testimonial', function () {
    return view('admin.pages.testimonial');
})->name('testimonial');
Route::get('/faq', function () {
    return view('admin.pages.faq');
})->name('faq');
Route::get('/blog-category', function () {
    return view('admin.pages.blog-category');
})->name('blog-category');
Route::get('/blog-description', function () {
    return view('admin.pages.blog-description');
})->name('blog-description');


