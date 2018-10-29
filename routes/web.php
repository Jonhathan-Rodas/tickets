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

Route::get('/home', 'HomeController@admin@udeoberistain.edu.gtindex')->name('home');

Route::resource('services','ServiceController');

Route::prefix('tickets')->group(function () {
    Route::get('/', 'TicketController@index')->name('ticket.index');
    Route::get('list', 'TicketController@list')->name('ticket.list');
    Route::get('create/{service_id}', 'TicketController@create')->name('ticket.create');
    Route::post('store', 'TicketController@store')->name('ticket.store');
    Route::get('report', 'TicketController@report')->name('ticket.report');
});

