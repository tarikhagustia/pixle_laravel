<?php
Route::get('/', 'HomeController@index');
Route::post('/status/new', 'StatusControlles@update');
Route::post('/profile/edit', 'ProfileControllers@simpan_data');
Route::post('/profile/gambar', 'ProfileControllers@simpan_foto');
Route::get('/logout', function(){
  Auth::logout();
  return redirect('/home');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/profile', 'HomeController@profile');
