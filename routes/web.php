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

//Freight
Route::view('/', 'freight.home')->name('home');
Route::view('contact', 'freight.contact')->name('contact');
Route::view('about', 'freight.about')->name('about');
Route::view('track-shipment', 'freight.trackshipment')->name('track');
Route::view('sea-air-freight', 'freight.airfreight')->name('seaair');
Route::view('cargo', 'freight.cargo')->name('cargo');
Route::view('warehousing', 'freight.warehousing')->name('warehousing');
Route::view('movable-haulage', 'freight.movable')->name('movable');

Route::post('track-shipment', 'FreightController@track')->name('track-shipment');
Route::get('tracking-info/{id}', 'FreightController@getInfo')->name('tracking-info');


//Security
Route::view('asset-security', 'security.asset')->name('asset');
Route::view('hedge-accounting', 'security.hedge')->name('hedge');
Route::view('commercial-mortgage', 'security.mortgage')->name('mortgage');

//Miscellaneous
Route::post('contact-us', 'MiscellaneousController@contactUs')->name('post-contact');

//AdminR
Route::group(['middleware' => 'visitor'], function () {
    Route::view('admin1001', 'admin.login')->name('admin.login');
    Route::post('admin1001', 'AdminController@login')->name('login');
});

Route::group(['middleware' => 'admin'], function () {
    Route::get('admin', 'AdminController@dashboard')->name('admin.page');
    Route::post('add-tracking', 'AdminController@addTracking')->name('add-tracking');
    Route::post('add-details', 'AdminController@addTrackingDetails')->name('add-details');
    //Route::post('add-admin', 'AdminController@addAdmin')->name('add-admin');
    Route::post('delete-tracking', 'AdminController@deleteTracking')->name('delete-tracking');
    Route::post('delete-details', 'AdminController@deleteDetails')->name('delete-detail');
    Route::post('edit-tracking', 'AdminController@editTracking')->name('edit-tracking');
    Route::post('edit-detail', 'AdminController@editDetail')->name('edit-detail');

    Route::post('change-password', 'AdminController@changePassword')->name('change-password');

    Route::get('details/{id}', 'AdminController@details')->name('details');
});

Route::group(['middleware' => 'expire'], function () {
    Route::get('logout', 'AdminController@logout')->name('logout');
});


//Migrate
//Route::get('migrate', function(){
    //Artisan::call('migrate');
    //return 'Success';
//});

//Config
Route::get('configs', function () {
    Artisan::call('route:list');
    return 'Success';
});

//Down
//Route::get('down', function () {
    //Artisan::call('down');
    //return 'Success';
//});

//Up
// Route::get('up', function () {
//     Artisan::call('up');
//     return 'Success';
// });

// Route::get('successful', function () {
//     // return 'success';
//     Artisan::call('cache:clear');
//     return 'Success';
// });
