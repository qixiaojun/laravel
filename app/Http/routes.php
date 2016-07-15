<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web','admin.login'],'prefix'=>'admin','namespace'=>'Admin'], function () {
    Route::get('index', 'IndexController@index');
    Route::get('info', 'IndexController@info');
    Route::get('logout', 'LoginController@logout');
    Route::any('chpwd', 'IndexController@chpwd');
//
//    Route::any('content', 'ContentController@index');
//    Route::any('structure', 'StructureController@index');
//    Route::any('appearance', 'AppearanceController@index');
//    Route::any('modules', 'ModulesController@index');
//    Route::any('config', 'ConfigController@index');
//    Route::any('people', 'PeopleController@index');
//    Route::any('reports', 'ReportsController@index');
//    Route::any('help', 'HelpController@index');
//
//    Route::post('cate/changeorder', 'CategoryController@changeOrder');
//    Route::resource('category', 'CategoryController');
//
//    Route::resource('article', 'ArticleController');
//
//    Route::post('links/changeorder', 'LinksController@changeOrder');
//    Route::resource('links', 'LinksController');
//
//    Route::post('navs/changeorder', 'NavsController@changeOrder');
//    Route::resource('navs', 'NavsController');
//
//    Route::get('config/putfile', 'ConfigController@putFile');
//    Route::post('config/changecontent', 'ConfigController@changeContent');
//    Route::post('config/changeorder', 'ConfigController@changeOrder');
//    Route::resource('config', 'ConfigController');
//
//    Route::any('upload', 'CommonController@upload');

});


Route::auth();

Route::get('/home', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
