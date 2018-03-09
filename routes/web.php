<?php

Route::resource('/country', 'CountryController');
Route::get('/nview', function(){
  return view('newview');
});
Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
