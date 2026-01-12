<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;

Route::name('frontend.')->group(
    function () {
        Route::get('/', [FrontendController::class, 'home'])->name('home');
        Route::get('/about-us', [FrontendController::class, 'about'])->name('about');
        Route::get('/services', [FrontendController::class, 'service'])->name('service');
        Route::get('/services/{slug}', [FrontendController::class, 'servicesingle'])->name('servicesingle');
        Route::get('/study-abroad', [FrontendController::class, 'abroadstudies'])->name('abroad');
        Route::get('/study-abroad/{slug}', [FrontendController::class, 'abroadstudiesingle'])->name('abroadsingle');
        Route::get('/test-preparation', [FrontendController::class, 'course'])->name('course');
        Route::get('/test-preparation/{slug}', [FrontendController::class, 'coursesingle'])->name('coursesingle');
        Route::get('/blogs', [FrontendController::class, 'blog'])->name('blog');
        Route::get('/blogs/{slug}', [FrontendController::class, 'blogsingle'])->name('blogsingle');
        Route::get('/contact-us', [FrontendController::class, 'contact'])->name('contact');
        Route::get('/student-registers', [FrontendController::class, 'stregister'])->name('register');
        Route::post('/student-registers', [FrontendController::class, 'registerstudent'])->name('register.submit');

        Route::get('/our-team', [FrontendController::class, 'team'])->name('team');
        Route::get('/gallery', [FrontendController::class, 'visagrantes'])->name('gallery');
        Route::get('/message-from-founder', [FrontendController::class, 'messagefromfounder'])->name('messagefromfounder');
        Route::get('/message-from-managing-director', [FrontendController::class, 'messagefromdirector'])->name('messagefromdirector');

        Route::get('/interview-question', [FrontendController::class, 'interviewquestion'])->name('interviewquestion');

        Route::post('/contact-us', [FrontendController::class, 'contact_submite'])->name('contact.submit');
        Route::post('/', [FrontendController::class, 'contact_submite_home'])->name('contact.submit.home');
        Route::get('/pages/{slug}', [FrontendController::class, 'page'])->name('pages');

        Route::get('/event', [FrontendController::class, 'event'])->name('event');
        Route::get('/event/{slug}', [FrontendController::class, 'eventsingle'])->name('eventsingle');
    }
);
