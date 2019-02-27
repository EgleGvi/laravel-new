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

//Route::get('/', function () {
//    return view('welcome');
//});

use Illuminate\Support\Facades\Route;

//pagrindinis puslapis
Route::get('/books', 'BooksController@index');

Route::get('/authors', 'AuthorsController@index');
Route::get('books/create', 'BooksController@create');
Route::get('authors/create', 'AuthorsController@create');
Route::post('books', 'BooksController@store');
Route::post('authors', 'AuthorsController@store');

Route::get('books/{book}/edit', 'BooksController@edit');
Route::put('books/{book}', 'BooksController@update');
Route::get('authors/{author}/edit', 'AuthorsController@edit');
Route::put('authors/{author}', 'AuthorsController@update');

Route::delete('books/{book}', 'BooksController@destroy');


