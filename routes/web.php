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

//dd(resolve('App\Billing\Stripe'));

Route::get('/', 'PostController@index')->name('home');

Route::get('/posts/create', 'PostController@create');

Route::get('/posts/{post}', 'PostController@show');

Route::get('/register', 'RegistrationController@create');

Route::get('/login', 'SessionController@create')->name('login');

Route::get('/logout', 'SessionController@destroy');

Route::get('/posts/tags/{tag}', 'TagController@index');

Route::post('/posts', 'PostController@store');

Route::post('/posts/{post}/comments', 'CommentController@store');

Route::post('/register', 'RegistrationController@store');

Route::post('/login', 'SessionController@store');


