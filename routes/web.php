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

//Route::resource('author', 'AuthorController');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Route::resource('/admin/authors', 'AuthorController')->middleware('auth');
Route::resource('/admin/publishers', 'PublisherController')->middleware('auth');
Route::resource('/admin/members', 'MemberController')->middleware('auth');
Route::resource('/admin/categories', 'CategoryController')->middleware('auth');
Route::resource('/admin/books', 'BookController')->middleware('auth');
Route::resource('/admin/authorBooks', 'AuthorBookController')->middleware('auth');
Route::resource('/admin/bookSerials', 'BookSerialController')->middleware('auth');
Route::resource('/admin/borrows', 'BorrowController')->middleware('auth');

Route::get('/admin', 'AuthorController@index')->name('admin')->middleware('auth');
