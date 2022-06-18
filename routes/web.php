<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
//     return view('index');
// });
Route::get('/cookie/set','CookieController@setCookie');
Route::get('/cookie/get','CookieController@getCookie');
Route::view('/services', 'layouts.services');
Route::view('/aboutUs', 'layouts.aboutUs');
Route::view('/contactUs', 'layouts.contactUs');
Route::view('/products', 'layouts.products');
Route::match(['get', 'post'], '/', 'ContactUsController@retrieve');
Route::match(['get', 'post'], '/productAll', 'ContactUsController@retrieve1');
Route::match(['get', 'post'], '/uploadCont', 'ContactUsController@add');

Route::match(['get', 'post'], '/adminhome', 'ProductController@uploads');
Route::match(['get', 'post'], '/adminupgallery', 'GalleryController@uploadsgallery');
Route::match(['get', 'post'], '/adminDashboard', 'GalleryController@dashboard');


Route::match(['get', 'post'], '/viewP', 'ProductController@viewProduct');
Route::match(['get', 'post'], '/upload', 'ProductController@add');
Route::match(['get', 'post'], '/productUpdate/{id}', 'ProductController@update');
Route::match(['get', 'post'], '/productEdit/{id}', 'ProductController@edit')->name('productEdit');
Route::match(['get', 'post'], '/deleteProd/{id}', 'ProductController@delete')->name('deleteProd');
Route::match(['get', 'post'], '/productDel/{id}', 'ProductController@delp')->name('productDel');
Route::match(['get', 'post'], '/descriptionView/{id}', 'ProductController@view')->name('descriptionView');




Route::match(['get', 'post'], '/contactUsView', 'HomeController@contactUs');
Route::match(['get', 'post'], '/deleteMessage/{id}', 'ContactUsController@delete')->name('deleteMessage');
Route::match(['get', 'post'], '/messageDel/{id}', 'ContactUsController@delM')->name('messageDel');
Route::match(['get', 'post'], '/messageView/{id}', 'ContactUsController@edit')->name('messageView');



Route::match(['get', 'post'], '/uploadgallery', 'GalleryController@add');
Route::match(['get', 'post'], '/viewgallery', 'GalleryController@viewgallery');
Route::match(['get', 'post'], '/galleryEdit/{id}', 'GalleryController@edit')->name('galleryEdit');
Route::match(['get', 'post'], '/deleteGallery/{id}', 'GalleryController@delete')->name('deleteGallery');
Route::match(['get', 'post'], '/galleryDel/{id}', 'GalleryController@delp')->name('galleryDel');
Route::match(['get', 'post'], '/galleryUpdate/{id}', 'GalleryController@update');
// Route::match(['get','post'],'/galleryView','GalleryController@index');

Route::match(['get', 'post'], '/viewA', 'ProductController@viewAdmin');
Route::match(['get', 'post'], '/adminUpdate/{id}', 'ProductController@updateadmin');
Route::match(['get', 'post'], '/adminEdit/{id}', 'ProductController@editadmin')->name('adminEdit');
Route::match(['get', 'post'], '/deleteAdmin/{id}', 'ProductController@deleteadmin')->name('deleteAdmin');
Route::match(['get', 'post'], '/adminDel/{id}', 'ProductController@delA')->name('adminDel');


Route::get('/home', 'HomeController@index')->name('home');

// Authentication and Registration
Route::match(['get', 'post'], 'register1', 'Auth@index');
Route::match(['get', 'post'], 'store', 'Auth@store');

Route::match(['get', 'post'], 'login', 'Auth@login');
// Route::match(['get','post'],'store2','Auth@store2');
// Route::match(['get','post'],'logout','Auth@logout');

Auth::routes();

// change Password

Route::match(['get','post'],'/change-password', 'ChangePasswordController@index')->name('change-password');

Route::match(['get','post'],'/store-password', 'ChangePasswordController@store')->name('store-password');
