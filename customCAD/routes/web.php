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
Route::get('/programs', 'PagesController@programs')->name('programs');
Route::get('/programs/{event}', 'PagesController@showSingleProgram')->name('showSingleProgram');
Route::get('/organization', 'PagesController@organization')->name('organization');


// START Programs page controller

//History
Route::get('/program-history/{user}', 'PagesController@viewEventHistory')->name('eventHistory')->middleware('auth');
// Register request
Route::post('/program-register/{event}', 'RegisterEvent')->name('registerForEvent')->middleware('auth');
// Register free event success page
Route::get('/register-success', 'PagesController@freeEventRegistrationSuccess')->name('freeEventSuccess')->middleware('auth');
// Register free event failed page
Route::get('/register-failed', 'PagesController@freeEventRegistrationFailed')->name('freeEventFailed')->middleware('auth');
// Register paid event success page
Route::get('/paid-register-success', 'PagesController@paidEventRegistrationSuccess')->name('paidEventSuccess')->middleware('auth');
// Register paid event failed page
Route::get('/paid-register-failed', 'PagesController@paidEventRegistrationFailed')->name('paidEventFailed')->middleware('auth');

// END Programs page controller


// START Contact page controller
Route::get('/contact', 'PagesController@contact')->name('contact');
Route::post('/contact', 'ContactController@saveContact')->name('saveContact');
// END Contact page controller


// START profile page controller
Route::resource('/profile', 'ProfileController', ['except'=>['show','create','store']]);

Route::put('/change_password/{id}','ChangePasswordController@update')->name('ChangePassword');
// END profile page controller


// START authentication routes
Auth::routes();
// END authentication routes


// START Admin

// Admin manage pages
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:admin-panel')->group(function(){
    Route::get('/dashboard', 'AdminPagesController@index')->name('index');
    Route::get('/profile', 'AdminPagesController@profile')->name('profile');
    Route::get('/change-password', 'AdminPagesController@ChangePassword')->name('change-password');
});

// Admin manage users
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-users')->group(function(){
    Route::resource('/users', 'UsersController', ['except'=>['show','create','store']]);
    Route::put('/users', 'UsersController@verifyAllCheckedUser')->name('users.verifyAll');
    
});

// Admin manage events
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-events')->group(function(){
    Route::resource('/events', 'EventsController');
    Route::get('/partipants/{event}', 'EventsController@showParticipants')->name('events.showParticipants');
});

// Admin manage contacts
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-contacts')->group(function(){
    Route::resource('/contacts', 'ContactsController', ['except'=>['create','store','edit','update']]);
});

// Admin manage pages
Route::namespace('Admin')->prefix('admin')->name('admin.')->middleware('can:manage-pages')->group(function(){
    Route::resource('/home', 'HomeController', ['except'=>['index','create','store','show','destroy']]);
    Route::resource('/AboutPage', 'AboutPageController', ['except'=>['index','create','store','show','destroy']]);
    Route::resource('/ContactPage', 'ContactPageController', ['except'=>['index','create','store','show','destroy']]);
    Route::resource('/Organization', 'OrganizationController', ['except'=>['index','create','store','show','destroy']]);
    Route::resource('/Tops', 'TopsController',['except'=>['create','store','destroy']]);
});

// END Admin

// START Stripe
Route::post('stripe', 'StripePaymentController@stripePost')->name('stripe.post')->middleware('auth');
// END Stripe

//Test
Route::get('test', function () {
    $events = App\Event::all();
    
    return view('test',compact('events'));
    
});



