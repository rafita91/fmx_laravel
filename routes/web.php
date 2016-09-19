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

Route::group(['prefix' => 'admin'], function () {
    /*
     * Rutas asignadas al CRUD de usuarios
     */
    Route::resource('users', 'UsersController');
    Route::get('users/{id}/destroy', [
        'uses' => 'UsersController@destroy',
        'as' => 'admin.users.destroy'
    ]);
    Route::get('users/{id}/edit', [
        'uses' => 'UsersController@edit',
        'as' => 'admin.users.edit'
    ]);
    
    /*
     * Rutas asignadas al CRUD de Categorías
     */
    Route::resource('categories', 'CategoriesController');
    Route::get('categories/{id}/destroy', [
        'uses' => 'CategoriesController@destroy',
        'as' => 'admin.categories.destroy'
    ]);
    Route::get('categories/{id}/edit', [
        'uses' => 'CategoriesController@edit',
        'as' => 'admin.categories.edit'
    ]);
    
    /*
     * Rutas asignadas al CRUD de Tags
     */
    Route::resource('tags', 'TagsController');
    Route::get('tags/{id}/destroy', [
        'uses' => 'TagsController@destroy',
        'as' => 'admin.tags.destroy'
    ]);
    Route::get('tags/{id}/edit', [
        'uses' => 'TagsController@edit',
        'as' => 'admin.tags.edit'
    ]);
});


