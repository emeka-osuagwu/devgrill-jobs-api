<?php

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['prefix' => '/'], function () {
    Route::get('/', 'JobController@index');
    // Route::get('/{id}', 'UserController@getUser')->middleware('authenticated');
    // Route::get('{id}/kyc', 'KycController@userKyc');
    // Route::get('wallet', 'UserController@userWallet');
    // Route::post('/update', 'UserController@update')->middleware('authenticated');
    // Route::post('/loan_activation', 'UserController@loanActivation');
    // Route::post('/update_profile_image', 'UserController@updateProfileImage');
    // Route::post('update/loan_status', 'UserController@updateLoanStatus')->middleware('admin_only');
    // Route::post('/password_update', 'UserController@updatePassword');
    // Route::post('/device_password_update', 'UserController@updateDevicePassword')->middleware('authenticated');
    // Route::get('/order', 'OrderController@userOrders');
});
