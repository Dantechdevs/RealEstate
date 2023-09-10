<?php

use App\Http\Controllers\frontend\PropertiesController;
use App\Http\Controllers\pages\PagesController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PagesController::class, 'home'])->name('pages.home');


Route::controller(PagesController::class)->prefix('pages')->group(function () {
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about-us', 'aboutus')->name('about');


});
Route::controller(PropertiesController::class)->prefix('properties')->group(function () {
    Route::get('/', 'index')->name('properties.index');



});
