<?php

Route::group(['prefix' => '', 'middleware' => 'cors'], function () {

    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', 'HomeController@index')->name('home');
    Route::get('/contacts', 'ContactsController@get');
    Route::get('/conversation/{id}', 'ContactsController@getMessagesFor');
Route::post('/conversation/send', 'ContactsController@send');
});