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


Route::get('/', 'BookController@home')->name('home');
Route::get('/add', 'BookController@add')->name('add');
Route::post('/add', 'BookController@insert')->name('insert');

Route::get('/view', 'BookController@view')->name('view');
Route::get('/delete/{id}', 'BookController@delete')->name('delete');
Route::get('/read/{id}', 'BookController@read')->name('read');
Route::get('/update/{id}', 'BookController@update')->name('update');
Route::post('/updated/{id}', 'BookController@updated')->name('updated');

Route::get('/useradd', 'UserController@useradd')->name('useradd');
Route::post('/useradd', 'UserController@useradder')->name('useradder');


Route::get('/uploadImage/{id}', 'BookController@uploadView');
Route::post('/uploadImage/{id}', 'BookController@uploadSubmit');

Route::get('/backgroundImage', 'BackgroundController@uploadBackground');
Route::post('/backgroundImage', 'BackgroundController@submitBackground');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::group(['prefix' => 'admin', 'middleware' => 'auth'], function () {
    Route::get('/', function () {
        return view('admin.admin');
    });


});
Route::group(['prefix' => 'click'], function () {
    Route::get('/', 'clickController@index');
    Route::post('/insert','clickController@insert')->name('click-insert');
    Route::post('/view','clickController@view')->name('click-view');
});
