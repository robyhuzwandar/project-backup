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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});


Route::group(['prefix' => 'v1', 'middleware' => 'corsNew'], function (){
    Route::post('/post/store', 'PostController@store');
    Route::get('/post/get/all', 'PostController@show');
    Route::get('/post/get/{id}', 'PostController@showById');
    Route::patch('/post/update/{id}', 'PostController@update');
    Route::delete('/post/destroy/{id}', 'PostController@destroy');

    Route::post('/category/store', 'CategoryController@store');
    Route::get('/category/get/all', 'CategoryController@show');
    Route::get('/category/get/{id}', 'CategoryController@showById');
    Route::patch('/category/update/{id}', 'CategoryController@update');
    Route::delete('/category/destroy/{id}', 'CategoryController@destroy');

    Route::post('/event/store', 'EventController@store');
    Route::get('/event/get/all', 'EventController@show');
    Route::get('/event/get/{id}', 'EventController@showById');
    Route::patch('/event/update/{id}', 'EventController@update');
    Route::delete('/event/destroy/{id}', 'EventController@destroy');

    Route::post('/member/store', 'MemberController@store');
    Route::get('/member/get/all', 'MemberController@show');
    Route::get('/member/get/{id}', 'MemberController@showById');
    Route::patch('/member/update/{id}', 'MemberController@update');
    Route::delete('/member/destroy/{id}', 'MemberController@destroy');

    Route::post('/community/store', 'CommunityController@store');
    Route::get('/community/get/all', 'CommunityController@show');
    Route::get('/community/get/{id}', 'CommunityController@showById');
    Route::patch('/community/update/{id}', 'CommunityController@update');
    Route::delete('/community/destroy/{id}', 'CommunityController@destroy');
});

