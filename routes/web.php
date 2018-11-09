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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', function(){
	return view('admin.master');
});


Route::prefix('admin')->group(function(){
	Route::resource('users','UserController');
	Route::resource('tickets','TicketController');
	Route::post('/comment', 'CommentsController@newComment');
	Route::get('edit/ticket/{id}', 'TicketController@editTicket')->name('editTicket');
	Route::post('edit/ticket/{id}', 'TicketController@updateTicket')->name('updateTicket');
});
