<?php

/**
 * Frontend Access Controllers
 * All route names are prefixed with 'frontend.auth'.
 */
Route::group(['namespace' => 'Auth', 'as' => 'auth.'], function () {

    /*
     * These routes require the user to be logged in
     */
    Route::group(['middleware' => 'auth'], function () {
        Route::get('logout', 'LoginController@logout')->name('logout');

        //For when admin is logged in as user from backend
        Route::get('logout-as', 'LoginController@logoutAs')->name('logout-as');

        // Change Password Routes
        Route::patch('password/change', 'ChangePasswordController@changePassword')->name('password.change');

    });

    /*
     * These routes require no user to be logged in
     */
    Route::group(['middleware' => 'guest'], function () {
        // Authentication Routes
        Route::get('login', 'LoginController@showLoginForm')->name('login');
        Route::post('login', 'LoginController@login')->name('login');

        // Socialite Routes
        Route::get('login/{provider}', 'SocialLoginController@login')->name('social.login');



        Route::get('lawyer', 'Controller@Termcondition')->name('term');

        // Registration Routes
        Route::get('register', 'RegisterController@showRegistrationForm')->name('register');
        if (config('access.users.registration')) {
            Route::post('register', 'RegisterController@register')->name('register');

            Route::get('advocate-signup', 'RegisterController@showRegistrationForm')->name('advocate-signup');
            Route::post('advocate-signup', 'RegisterController@register')->name('advocate-signup');
            Route::get('user-register', 'RegisterController@showuserRegistrationForm')->name('user-register');
        }

        

        // Confirm Account Routes
        Route::get('account/confirm/{token}', 'ConfirmAccountController@confirm')->name('account.confirm');
        Route::get('account/confirm/resend/{user}', 'ConfirmAccountController@sendConfirmationEmail')->name('account.confirm.resend');

        // Password Reset Routes
        Route::get('password/reset', 'ForgotPasswordController@showLinkRequestForm')->name('password.email');
        Route::post('password/email', 'ForgotPasswordController@sendResetLinkEmail')->name('password.email');


        //Route::post('password_reset', 'ResetPasswordController@Passwordreset');

        Route::get('password/reset/{token}', 'ResetPasswordController@showResetForm')->name('password.reset.form');
        Route::post('password/reset', 'ResetPasswordController@reset')->name('password.reset');

        Route::get('reset', 'ResetPasswordController@resetss')->name('reset.pass');
    });
});
