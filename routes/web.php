
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
