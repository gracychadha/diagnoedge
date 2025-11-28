<?php

use App\Http\Controllers\TestController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WebsiteSetting;
use App\Http\Controllers\SystemSetting;
use App\Http\Controllers\CaptchaSettingController;
use App\Http\Controllers\HealthRiskController;
use App\Models\Subparameter;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParameterController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\SubparameterController;
use App\Http\Controllers\PackageController;
use App\Http\Controllers\MailController;



//   for frontend 

Route::get('/', function () {
    return view('website.pages.welcome');
})->name('home');
Route::post('/book-test', [BookingController::class, 'store'])->name('book.test');
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



Route::get('/admin-staff', function () {
    return view("admin.pages.admin-staff");
})->name('admin-staff');
Route::get('/admin-profile', function () {
    return view("admin.pages.admin-profile");
})->name('admin-profile');
Route::get('/admin-patient', function () {
    return view('admin.pages.admin-patient');
})->name('admin-patient');

Route::get('/general-setting', function () {
    return view('admin.pages.general-setting');
})->name('general-setting');
Route::get('/logout', function () {
    return view('admin.pages.logout');
})->name('logout');

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
Route::get('/theme-setting', function () {
    return view('admin.pages.theme-setting');
})->name('theme-setting');




// for appointment form
Route::post('/appointment-store', [AppointmentController::class, 'store'])->name('appointment.store');
// for contact form
Route::post('/store', [ContactController::class, 'store'])->name('contact-us.store');


// +++++++++++++++++++++++++++++++++++++++++++++++
// ALL THE ROUTES FOR BACKEND DASHBOARD
// +++++++++++++++++++++++++++++++++++++++++++++++
Route::get('/dashboard', function () {
    return view('admin.pages.dashboard');
})->middleware('auth')->name('dashboard');

Route::middleware('auth')->group(function () {

    // ────────────── Tests Details ──────────────
    Route::get('/tests', [TestController::class, 'index'])->name('admin.pages.test');
    Route::post('/tests', [TestController::class, 'store'])->name('admin.tests.store');
    Route::put('/tests/{test}', [TestController::class, 'update'])->name('admin.tests.update');
    Route::delete('/tests/{test}', [TestController::class, 'destroy'])->name('admin.tests.destroy');

    // ────────────── PARAMETERS ──────────────

    Route::get('/parameters', [ParameterController::class, 'index'])
        ->name('admin.pages.parameter');
    Route::post('/parameters', [ParameterController::class, 'store'])
        ->name('admin.parameters.store');
    Route::put('/parameters/{parameter}', [ParameterController::class, 'update'])
        ->name('admin.parameters.update');
    Route::delete('/parameters/{parameter}', [ParameterController::class, 'destroy'])
        ->name('admin.parameters.destroy');

    // ────────────── Health Risks ──────────────
    Route::get('/health-risks', [HealthRiskController::class, 'index'])
        ->name('health-risks.index');

    Route::post('/health-risks', [HealthRiskController::class, 'store'])
        ->name('health-risks.store');

    Route::put('/health-risks/{healthRisk}', [HealthRiskController::class, 'update'])
        ->name('health-risks.update');

    Route::delete('/health-risks/{healthRisk}', [HealthRiskController::class, 'destroy'])
        ->name('health-risks.destroy');


    // ────────────── Health Package/ sub parameter ──────────────
    Route::get('/admin-subparameters', [SubparameterController::class, 'index'])
        ->name('admin-subparameters.index');

    Route::post('/admin-subparameters', [SubparameterController::class, 'store'])
        ->name('admin-subparameters.store');

    Route::put('/admin-subparameters/{healthRisk}', [SubparameterController::class, 'update'])
        ->name('admin-subparameters.update');

    Route::delete('/admin-subparameters/{healthRisk}', [SubparameterController::class, 'destroy'])
        ->name('admin-subparameters.destroy');


    //test services 


    Route::get('/services', [ServiceController::class, 'index'])->name('services.index');
    Route::post('/services', [ServiceController::class, 'store'])->name('services.store');
    Route::post('/services/update', [ServiceController::class, 'update'])->name('services.update');
    Route::post('/services/delete/{service}', [ServiceController::class, 'destroy'])->name('services.destroy');



    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');



    // FOR DOCTOR
    Route::post('/doctors/store', [DoctorController::class, 'store'])->name('admin-doctor.store');
    Route::get('/admin-doctors', [DoctorController::class, 'index'])->name('admin-doctors.index');
    Route::get('/doctors/view/{id}', [DoctorController::class, 'view']);
    Route::post('/doctors/update', [DoctorController::class, 'update']);
    Route::delete('/doctors/delete/{id}', [DoctorController::class, 'delete']);


    // FOR APPOINTMENT
    Route::get('/appointments', [AppointmentController::class, 'index'])->name('admin-appointment.index');
    Route::get('/appointment/view/{id}', [AppointmentController::class, 'view']);
    Route::post('/appointment/update', [AppointmentController::class, 'update']);
    Route::delete('/appointment/delete/{id}', [AppointmentController::class, 'delete']);


    // FOR PACKAGES 
    Route::get('/admin-packages', [PackageController::class, 'index'])->name('packages.index');
    Route::post('/admin-packages/store', [PackageController::class, 'store'])->name('packages.store');
    Route::get('/admin-packages/view/{id}', [PackageController::class, 'view']);




    // ────────────── Website Setting ──────────────

    Route::get('/website-setting', [WebsiteSetting::class, 'index'])
        ->name('website-setting');

    Route::put('/website-setting', [WebsiteSetting::class, 'update'])
        ->name('website-setting.update');



    // ────────────── Website Setting ──────────────

    Route::get('/system-setting', [SystemSetting::class, 'index'])
        ->name('system-setting');

    Route::put('/system-setting', [SystemSetting::class, 'update'])
        ->name('system-setting.update');


    // ────────────── General/ Captcha Setting ──────────────

    Route::get('/general-setting', [CaptchaSettingController::class, 'index'])
        ->name('general-setting');

    Route::put('/general-setting', [CaptchaSettingController::class, 'update'])
        ->name('general-setting.update');
});




require __DIR__ . '/auth.php';
