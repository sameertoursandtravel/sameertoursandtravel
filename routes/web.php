<?php

use App\Models\Vacancy;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')
    ->name('home')
    ->defaults('vacancies', fn () => Vacancy::open()->take(3)->get());

Route::view('/about-us', 'pages.about')->name('about');
Route::view('/services', 'pages.services')->name('services');

Route::get('/current-vacancies', function () {
    return view('pages.vacancies', [
        'israelVacancies' => Vacancy::open()->where('country', 'Israel')->get(),
        'armeniaVacancies' => Vacancy::open()->where('country', 'Armenia')->get(),
    ]);
})->name('vacancies');

Route::view('/success-stories', 'pages.success-stories')->name('success-stories');
Route::view('/contact-us', 'pages.contact')->name('contact');

Route::view('/privacy-policy', 'pages.legal.privacy')->name('privacy');
Route::view('/terms-and-conditions', 'pages.legal.terms')->name('terms');
Route::view('/disclaimer', 'pages.legal.disclaimer')->name('disclaimer');
