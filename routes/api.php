<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/**
  ----------------------------------------------------------------------------
  |                         Reminder Routes                                  |
  ----------------------------------------------------------------------------
 */
Route::group(['prefix' => 'reminder', 'namespace' => 'App\Http\Controllers\Reminders'], function () {
    Route::get('upcoming', 'ReminderController@upcomingReminderList');      //get list of upcoming reminders
    Route::put('read/{id}', 'ReminderController@readReminder');             //records the time of read of the reminder
    Route::post('create','ReminderController@createReminder');          //creates a reminder
    Route::put('update','ReminderController@updateReminder');           //updates a reminder
    Route::delete('delete/{id}', 'ReminderController@deleteReminder');    //deletes a reminder
});
