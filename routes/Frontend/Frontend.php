<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */


Route::get('/', 'FrontendController@index')->name('index');
Route::post('/get/states', 'FrontendController@getStates')->name('get.states');
Route::post('/get/cities', 'FrontendController@getCities')->name('get.cities');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 */
// ->middleware('subscribed') 'middleware' => 'subscribed',
Route::group(['middleware' => 'auth'], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account')->middleware('subscribed');
        Route::get('edit-account', 'AccountController@showEditForm')->name('edit-account')->middleware('subscribed');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update')->middleware('subscribed');

        Route::get('appointment', 'ProfileController@appointment')->name('appointment');
        /*
        * User Profile Picture
        */
        Route::post('profile-picture/update', 'ProfileController@update')->name('profile-picture.update')->middleware('subscribed');
    });
    
    Route::post('set-availability', 'AvailabilityController@saveAvailability')->name('setavailability');
    Route::get('plans', 'PlansController@index')->name('plans');
    
    Route::post('makepayment', 'PlansController@makepayment')->name('make-payment');
    
    Route::post('bookmeeting', 'SearchController@bookMeeting');
    
});

Route::post('appointment', 'AvailabilityController@saveappointment')->name('appointment');
Route::get('getuserdetails/{id}', 'AvailabilityController@getUserDetails')->name('userdetails');
Route::post('paymentsuccess', 'PlansController@payment_success')->name('paymentsuccess');
Route::get('get-availability', 'AvailabilityController@getAvailabilitySlots')->name('getavailability');
Route::get('get-availability-slots', 'AvailabilityController@getAvailabilitySlotsByPrahar')->name('getavailabilityslots');
Route::get('thank-you', 'PlansController@thankyou')->name('thank-you');

Route::post('booking', 'BookingController@index')->name('booking');

/*
* Show pages
*/
Route::get('contactus', 'FrontendController@contactUs');
Route::get('search/{term?}', 'SearchController@index');
Route::post('search', 'SearchController@searchUser');

Route::post('contactus', 'FrontendController@contactUSPost');
Route::get('enquiryFormSubmit', 'FrontendController@enquiryFormSubmit');
Route::post('enquiryFormSubmit', 'FrontendController@enquiryFormSubmit');
Route::get('pages/{slug}', 'FrontendController@show')->name('pages.show');

Route::get('dataimport', 'DataImportController@importView')->name('dataimport.import');

Route::get('advocate-profile/{slug}', 'SearchController@advocateProfile')->name('frontend.advocate.profile');
Route::get('{main}/{slug}', 'FrontendController@showPage')->where('main', '^((?!admin).)*$');

// Blog
Route::get('blogs','BlogController@index');



