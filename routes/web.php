<?php
Route::view('/', 'welcome');
Auth::routes();

Route::get('/login/admin', 'Auth\LoginController@showAdminLoginForm');
Route::get('/login/manager', 'Auth\LoginController@showManagerLoginForm');

Route::get('/register/admin', 'Auth\RegisterController@showAdminRegisterForm');
Route::get('/register/manager', 'Auth\RegisterController@showManagerRegisterForm');

Route::post('/login/admin', 'Auth\LoginController@adminLogin')->name('admin_login');
Route::post('/login/manager', 'Auth\LoginController@managerLogin')->name('manager_login');

Route::post('/register/admin', 'Auth\RegisterController@createAdmin')->name('admin_register');
Route::post('/register/manager', 'Auth\RegisterController@createManager')->name('manager_register');

Route::view('/home', 'home')->middleware('auth');
Route::view('/admin', 'admin');
Route::view('/manager', 'manager');