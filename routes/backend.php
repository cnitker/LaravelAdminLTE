<?php

Route::get('/login','Backend\LoginController@showLoginForm')->name('backend.login');
Route::post('/login','Backend\LoginController@login');
Route::get('/logout','Backend\LoginController@logout')->name('backend.logout');


Route::group(['namespace'=>'Backend'],function (){

    Route::get('/welcome','MainController@index')->name('backend.main');


});