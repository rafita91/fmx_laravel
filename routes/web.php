<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'articles'], function () {
    //test http://localhost:8000/articles/view/1
    Route::get('view/{id}', [
        'uses' => 'TestController@view',
        'as' => 'ArticlesView'
    ]);
});

