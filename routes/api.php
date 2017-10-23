<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', 'Auth\RegisterController@register');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout');

Route::get('churches', 'ChurchController@index');
Route::get('churches/{church}', 'ChurchController@show');
Route::post('churches', 'ChurchController@store');
Route::put('churches/{church}', 'ChurchController@update');
Route::delete('churches/{church}', 'ChurchController@delete');

Route::get('events', 'EventController@index');
Route::get('events/{event}', 'EventController@show');
Route::post('events', 'EventController@store');
Route::put('events/{event}', 'EventController@update');
Route::delete('events/{event}', 'EventController@delete');

Route::get('schedules', 'ScheduleController@index');
Route::get('schedules/{schedule}', 'ScheduleController@show');
Route::post('schedules', 'ScheduleController@store');
Route::put('schedules/{schedule}', 'ScheduleController@update');
Route::delete('schedules/{schedule}', 'ScheduleController@delete');

Route::get('denominations', 'DenominationController@index');
Route::get('denominations/{denomination}', 'DenominationController@show');
Route::post('denominations', 'DenominationController@store');
Route::put('denominations/{denomination}', 'DenominationController@update');
Route::delete('denominations/{denomination}','DenominationController@delete');

Route::get('favorite_churches', 'Favorite_churchController@index');
Route::get('favorite_churches/{favorite_church}', 'Favorite_churchController@show');
Route::post('favorite_churches', 'Favorite_churchController@store');
Route::put('favorite_churches/{favorite_church}', 'Favorite_churchController@update');
Route::delete('favorite_churches/{favorite_church}','Favorite_churchController@delete');

Route::get('favorite_events', 'Favorite_eventController@index');
Route::get('favorite_events/{favorite_event}', 'Favorite_eventController@show');
Route::post('favorite_events', 'Favorite_eventController@store');
Route::put('favorite_events/{favorite_event}', 'Favorite_eventController@update');
Route::delete('favorite_events/{favorite_event}','Favorite_eventController@delete');

Route::get('schedules_category', 'Schedule_categoryController@index');
Route::get('schedules_category/{schedules_category}', 'Schedule_categoryController@show');
Route::post('schedules_category', 'Schedule_categoryController@store');
Route::put('schedules_category/{schedules_category}', 'Schedule_categoryController@update');
Route::delete('schedules_category/{schedules_category}', 'Schedule_categoryController@delete');


Route::get('events_category', 'Event_categoryController@index');
Route::get('events_category/{event_category}', 'Event_categoryController@show');
Route::post('events_category', 'EventController@store');
Route::put('events_category/{event_category}', 'Event_categoryController@update');
Route::delete('events_category/{event_category}', 'Event_categoryController@delete');

