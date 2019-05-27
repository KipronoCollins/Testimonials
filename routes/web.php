<?php

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

Route::get('/', 'Testimonials@welcome');

Route::get('/landing', 'Testimonials@landing');

Route::resource('testimonials', 'AvechiTestimonials');


Route::post('/savetestimonial', 'Testimonial@test')->name('savetestimonial');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
