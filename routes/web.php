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
/*auth part for users  */
Route::get('admin/login','web\Admin\AuthController@login')->name('get.admin.login');
Route::post('admin/login','web\Admin\AuthController@postLogin')->name('post.admin.login');

//Route::get('admin/register','web\Admin\AuthController@register')->name('get.regidy');
//Route::post('admin/register','web\Admin\AuthController@postRegister')->name('post.login');


Route::namespace('web\Admin')->prefix('admin')->middleware('auth')->group(function (){

    Route::get('/', 'HomeController@homeStart');
//dashboard
    Route::get('/home/start','HomeController@homeStart')->name('get.home.page');
    Route::get('/home/active/lecture','HomeController@activeLecture')->name('get.active.lecture.page');

});
