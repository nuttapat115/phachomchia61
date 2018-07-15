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

Route::post('/ProfileDetail','ProfileDetailScan@name')->name('ProfileName');
Route::post('/ProfileDetailDepartment','ProfileDetailScan@department')->name('department');
Route::post('/insertDATA','ProfileDetailScan@insertDATA')->name('insertDATA');
Route::post('/checkName','ProfileDetailScan@checkName')->name('checkName');

Route::get('/test',function (){ echo "test api link";});