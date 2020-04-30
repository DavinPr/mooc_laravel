<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'CoursesController@home');
Route::get('/course', 'CoursesController@index');
Route::get('/course_details/{course}', 'CoursesController@show');
Route::get('/about', 'AboutController@index');
Route::get('/list_videos/{course}', 'VideosController@show');