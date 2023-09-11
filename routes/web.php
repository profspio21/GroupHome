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

Route::get('/home', 'HomeController@index')->name('home');
Route::redirect('/','home');
Route::get('/our_services','HomeController@ourServices')->name('our_services');
Route::get('/facilities','HomeController@facilities')->name('facilities');
Route::get('/our_staff','HomeController@ourStaff')->name('our_staff');
Route::get('/our_partners','HomeController@ourPartners')->name('our_partners');
Route::get('/contact','HomeController@Contact')->name('contact');