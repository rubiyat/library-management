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
    return view('welcome');
});



Route::post('/authors/add', [
    'uses' => 'AuthorController@addNew',
    'as' => 'add-author'
]);



Route::get('/list', function () {
    return view('admin.authors.index');
});

Route::get('/create', function () {
    return view('admin.authors.create');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
