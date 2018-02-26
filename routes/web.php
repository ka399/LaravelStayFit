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

/*Routing for Home Page : GET*/
Route::get('/','PagesController@home')-> name('home');

/*Routing for About Page : GET*/
Route::get('/about','PagesController@about')-> name('about');

/*Routing for Contact Page : GET*/
Route::get('/contact','PagesController@contact')-> name('contact');

/*Routing for Contact Page : GET*/
Route::get('/classes','PagesController@classes')-> name('classes');

/*Routing for Contact Page : GET*/
Route::get('/login','PagesController@login')-> name('login');

/*Routing for Contact Page : GET*/
Route::get('/register','PagesController@register')-> name('register');

Route::get('/logout','PagesController@logout')-> name('logout');

Route::get('/viewmsgs','PagesController@viewmessages')-> name('viewmsgs');

Route::get('/thankyou/{name}', 'PagesController@thankyou')->name('thankyou');

Route::post('/contact', 'PagesController@contactsubmit')->name('contact.submit');

Route::get('/viewcontactmessage/{name}/', 'PagesController@viewcontactmessage')->name('viewcontactmessage');

