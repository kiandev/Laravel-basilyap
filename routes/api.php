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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::resource('about','AboutController');
Route::resource('unit/base','UnitBaseController');
Route::get('unit/base_limit','UnitBaseController@limit');
Route::get('unit/base_special','UnitBaseController@special');
Route::resource('unit/advance','UnitAdvanceController');
Route::Post('unit/advance_detail','UnitAdvanceController@unit');
Route::resource('unit/image','UnitImageController');
Route::resource('user','UserController');
Route::post('user/get_detail','UserController@get_detail');
Route::post('user/change_pass','UserController@password');
Route::post('user/update_detail','UserController@detail');
Route::post('user/login','UserController@login');
Route::post('user/email','UserController@email');
Route::resource('opinion','OpinionController');
Route::resource('team','TeamController');
Route::resource('comunication','ComunicationController');
Route::resource('project','ProjectController');
Route::Post('project/detail','ProjectController@detail');
Route::resource('notification','NotificationController');
Route::resource('chat','ChatController');
Route::post('chat/personal','ChatController@personal');
Route::resource('bug','BugController');
Route::post('user/forget','UserController@forget');
