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

Route::get('/', 'PagesController@index')->name('home');
Route::get('/about', 'PagesController@about')->name('about');
//Route::get('/programs', 'PagesController@programs')->name('programs');
Route::get('/organization', 'PagesController@organization')->name('organization');

//Contact page controller
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'ContactController@saveContact')->name('saveContact');




Auth::routes(['verify' => true]);


Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){

Route::resource('/users', 'UsersController', ['except'=>['show','create','store']]);
});

Route::resource('/profile', 'ProfileController', ['except'=>['show','create','store']]);

Route::put('/change_password/{id}','ChangePasswordController@update')->name('ChangePassword');
//Route::get('/member', 'MemberController@index')->name('member')->middleware('member');
//Route::get('/user', 'UserController@index')->name('user')->middleware('user');
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/adminExample', 'PagesController@adminExample')->name('adminExample');