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



Route::get('/', 'BooksController@index');

Route::get('/books/edit/{id}', 'BooksController@edit');

Route::patch('/books/{id}', 'BooksController@update');

Route::get('/authors', 'AuthorsController@index');

Route::get('/authors/{id}', 'AuthorsController@authorbooks');

/*
Route::get('/edit', function () {
    return view('edit');
});
*/
