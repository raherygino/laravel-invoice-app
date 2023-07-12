<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;


Route::group(['namespace' => 'App\Http\Controllers'], function()
{

    Route::group(['middleware' => ['guest']], function() {
        Route::get('/login', 'AuthController@show')->name('loginPage');
        Route::post('/login', 'AuthController@login')->name('loginRequest');
    });
    
    Route::get('welcome', 'MainController@index')->name('welcome');

    Route::group(['middleware' => ['auth']], function() {
        Route::get('/', 'MainController@index')->name('index');
        Route::get('/logout', 'AuthController@logout')->name('logout');
        Route::resource('users', UserController::class);
    });
});
