<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/gr/hk', function () {
    return view('gr.hk'); 
})->name('gr.hk'); // Correctly defining the named route

Route::get('/gr/fb', function () {
    return view('gr.fb'); 
})->name('gr.fb'); // Correctly defining the named route

Route::get('/gr/eng', function () {
    return view('gr.eng'); 
})->name('gr.eng'); // Correctly defining the named route

Route::get('/gr/fo', function () {
    return view('gr.fo'); 
})->name('gr.fo'); // Correctly defining the named route

Route::get('/gr/fbs', function () {
    return view('gr.fbs'); 
})->name('gr.fbs'); // Correctly defining the named route

Route::get('/gr/act', function () {
    return view('gr.act'); 
})->name('gr.act'); // Correctly defining the named route

Route::get('/gr/sales', function () {
    return view('gr.sales'); 
})->name('gr.sales'); // Correctly defining the named route

Route::get('/gr/accident', function () {
    return view('gr.accident'); 
})->name('gr.accident'); // Correctly defining the named route


