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

Route::group(['middleware' => ['custom_auth']], function(){
	Route::get('/admin', ['as' => 'admin', 'uses' => 'IgCrawController@getIndex']);
	Route::get('/admin/status/{status}', ['as' => 'pending-post', 'uses' => 'IgCrawController@getPostToAdm']);
	Route::post('/ig-action', ['as' => 'ig-action', 'uses' => 'IgCrawController@igAction']);
});

Route::get('/login', ['as' => 'getLogin', 'uses' => 'AuthController@getLogin']);
Route::post('/login', ['as' => 'postLogin', 'uses' => 'AuthController@postLogin']);
Route::get('/logout', ['as' => 'logout', 'uses' => 'AuthController@getLogout']);


Route::get('/', ['as' => '4-step-skin-routine', 'uses' => 'StaticPageController@get4StepSkinRoutine']);
Route::get('/skin-care-sets', ['as' => 'skin-care-sets', 'uses' => 'StaticPageController@getOriflameSkinCareSets']);
Route::get('/4-steps-x-boomerang', ['as' => '4-steps-x-boomerang', 'uses' => 'StaticPageController@get4StepXBoomerang']);
Route::get('/4-steps-x-boomerang-challenger', ['as' => '4-steps-x-boomerang-challenger', 'uses' => 'StaticPageController@get4StepXBoomerangChallenger']);

// Route::get('/', function () {
//     return view('index');
// });
