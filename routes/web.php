
<?php

use Illuminate\Support\Facades\Route;

// หน้าแรก
Route::get('/', function () {
    return view('welcome');
})->name('home');

// หน้าแจ้งสัตว์หาย
Route::get('report', function () {
    return view('report');
})->name('report');

// หน้ารายงานเบาะแสสัตว์เลี้ยง
Route::get('clue', function () {
    return view('clue');
})->name('clue');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/pets', function () {
    return view('pets');
})->name('pets');

Route::get('/login', function () {
    return view('login');
})->name('login');

Route::get('/register', function () {
    return view('register');
})->name('register');
