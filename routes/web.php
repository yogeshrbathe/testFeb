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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::view('login','login');// for login
Route::post('login','EnquiryController@login');
Route::view('enquiry','enquiry');//for view enquiry form
Route::get('enquiryList','EnquiryController@enquiryList');//for view enquiry list & filter functionality
Route::post('enquiryList','EnquiryController@enquiryList');
Route::post('enquiry','EnquiryController@enquiry');
