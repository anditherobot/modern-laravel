<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return View::make('pages.home');
});

Route::get('/contact', function () {
    return View::make('pages.contact');
});



Route::get('/blog-home-1', function () {
    return View::make('pages.blog-home-1');
});

Route::get('/blog-home-2', function () {
    return View::make('pages.blog-home-2');
});

Route::get('/blog-post', function () {
    return View::make('pages.blog-post');
});

Route::get('/faq', function () {
    return View::make('pages.faq');
});

Route::get('/full-width', function () {
    return View::make('pages.full-width');
});

Route::get('/portfolio-1', function () {
    return View::make('pages.portfolio-1');
});
Route::get('/portfolio-2', function () {
    return View::make('pages.portfolio-2');
});
Route::get('/portfolio-3', function () {
    return View::make('pages.portfolio-3');
});
Route::get('/portfolio-4', function () {
    return View::make('pages.portfolio-4');
});
Route::get('/portfolio-item', function () {
    return View::make('pages.portfolio-item');
});
Route::get('/pricing', function () {
    return View::make('pages.pricing');
});
Route::get('/services', function () {
    return View::make('pages.services');
});
Route::get('/sidebar', function () {
    return View::make('pages.sidebar');
});