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

Route::namespace('Dashboard')->group(function () {
    Route::group(['prefix' => 'dashboard'], function () {
        Route::group(['prefix' => 'section'], function () {
            Route::get('/', 'SectionController@index')->name('section.index');
            Route::get('create', 'SectionController@create')->name('section.create');
            Route::post('create', 'SectionController@store')->name('section.store');

            Route::get('edit/{id}', 'SectionController@edit')->name('section.edit');
            Route::post('update/{id}', 'SectionController@update')->name('section.update');

            Route::get('delete/{id}', 'SectionController@getDelete')->name('section.get.delete');
            Route::post('delete/{id}', 'SectionController@delete')->name('section.delete');

        });
    });
});
