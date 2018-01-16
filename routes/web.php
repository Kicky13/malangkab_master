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

Route::get('/', function () {
    return view('coverpage');
});

Route::get('/kuesioner', 'KuesionerController@index');
Route::get('/kuesioner/dimension', 'KuesionerController@dimensionIndex');
Route::get('/kuesioner/dimension', 'KuesionerController@dimension');
Route::get('/kuesioner/public1', 'KuesionerController@public1');
Route::post('/kuesioner/tempInfor', 'KuesionerController@tempInfor');
Route::get('/kuesioner/public2', 'KuesionerController@public2');
Route::post('/kuesioner/publicSubmit', 'KuesionerController@publicSubmit');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/personnel', 'PersonnelController@index');
Route::get('/personnel/add', 'PersonnelController@createView');
Route::post('/personnel/add', 'PersonnelController@create');
Route::get('/personnel/update/{id}', 'PersonnelController@updateView');
Route::post('/personnel/update/{id}', 'PersonnelController@update');
Route::get('/personnel/delete/{id}', 'PersonnelController@destroy');

Route::get('/site', 'SiteController@index');
Route::get('/site/create', 'SiteController@createView');
Route::post('/site/create', 'SiteController@create');
Route::get('/site/update/{id}', 'SiteController@updateView');
Route::post('/site/update/{id}', 'SiteController@update');

Route::get('/periode', 'PeriodeController@index');
Route::get('/periode/create', 'PeriodeController@create');