<?php

use Illuminate\Support\Facades\Route;

Route::get('/',             fn () => view('home'))->name('home');
Route::get('/about',        fn () => view('about'))->name('about');
Route::get('/skills',       fn () => view('skills'))->name('skills');
Route::get('/projects',     fn () => view('projects'))->name('projects');
Route::get('/how-i-work',   fn () => view('how-i-work'))->name('how-i-work');
Route::get('/internship',   fn () => view('internship'))->name('internship');
Route::get('/qa',           fn () => view('qa'))->name('qa');
Route::get('/contact',      fn () => view('contact'))->name('contact');

Route::get('/lang/{locale}', function (string $locale) {
    if (!in_array($locale, ['en', 'it', 'nl'])) {
        abort(400);
    }
    session(['locale' => $locale]);
    return redirect()->back();
})->name('lang.switch');
