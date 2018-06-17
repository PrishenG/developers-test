<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'PagesController@index');
Route::resource('companies', 'CompanyController');
Route::resource('assets', 'AssetsController');

Route::get('/assets/{company_id}/company_assets', 'AssetsController@company_assets');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
