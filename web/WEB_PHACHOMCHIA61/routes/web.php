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
//    return view('welcome');
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/stage', 'HomeController@stage')->name('stage');
Route::get('/history', 'HomeController@history')->name('history');
Route::get('/scan', 'AdminController@scan')->name('scan');

Route::group(['middleware' => ['web']], function () {
    //Login Routes...
    Route::get('/admin/login','AdminAuth\AuthController@showLoginForm')->name('adminLogin');
    Route::post('/admin/login','AdminAuth\AuthController@login')->name('adminlogincheck');
    Route::get('/admin/logout','AdminAuth\AuthController@logout');

    // Registration Routes...
    Route::get('admin/register', 'AdminAuth\AuthController@showRegistrationForm');
    Route::post('admin/register', 'AdminAuth\AuthController@register');

});

Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
Route::get('/getDataProfile','AdminController@getDataProfile')->name('getDataProfile');

Route::group(['middleware' => 'usersession'], function () {
    Route::get('/admin', function (){
        return redirect()->route('dashboard');
    });
});


