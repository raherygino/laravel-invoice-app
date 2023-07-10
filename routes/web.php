<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    Route::group(['middleware' => ['guest']], function() {

        /**
         * Login Routes
         */

        /*
        *  Forgot Password
        */

    });
    
    Route::get('welcome', 'MainController@index')->name('welcome');
    Route::get('/', 'MainController@index')->name('index');

    Route::group(['middleware' => ['auth']], function() {
        
    });
});
