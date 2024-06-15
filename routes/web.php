<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view("pages.home");
})->name('home');
Route::get('/about', function () {
    return view("pages.about");
})->name('about');
Route::get('/teachers', function () {
    return view("pages.teachers");
})->name('teachers');
Route::get('/career', function () {
    return view("pages.career");
})->name('career');
Route::get('/news', function () {
    return view("pages.news");
})->name('news');
Route::get('/faq', function () {
    return view("pages.faq");
})->name('faq');
Route::get('/departments', function () {
    return view("pages.departments");
})->name('departments');
Route::get('/courseslist-IT', function () {
    return view("pages.courseslist-IT");
})->name('courseslist-IT');
Route::get('/courseslist-bm', function () {
    return view("pages.courseslist-bm");
})->name('courseslist-bm');
Route::get('/course-details', function () {
    return view("pages.course-details");
})->name('course-details');
Route::get('/courseslist-kids', function () {
    return view("pages.courseslist-kids");
})->name('courseslist-kids');
Route::get('/contact', function () {
    return view("pages.contact");
})->name('contact');
Route::get('/join', function () {
    return view("pages.join");
})->name('join');
