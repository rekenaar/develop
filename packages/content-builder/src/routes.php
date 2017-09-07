<?php

Route::group(['middleware' => ['web'], 'prefix' => 'content', 'namespace' => 'EONConsulting\ContentBuilder\Controllers'], function() {

    /**
     * ------------------------------------
     * Storyline Builder Core Routes
     * ------------------------------------
     */

    //Core Routes
    Route::match(['get', 'post'],'/', 'ContentBuilderCore@index')->name('eon.contentbuilder');

    Route::match(['get', 'post'],'/create', 'ContentBuilderCore@create')->name('eon.contentbuilder.create');

    Route::match(['get', 'post'],'/save', 'ContentBuilderCore@save')->name('eon.contentbuilder.save');

    Route::match(['get', 'post'],'/store', 'ContentBuilderCore@store')->name('eon.contentbuilder.store');

    Route::match(['get', 'post'],'/categories', 'ContentBuilderCategories@index')->name('eon.contentbuilder.categories');

    Route::match(['get', 'post'],'/update-category', 'ContentBuilderCategories@update')->name('eon.contentbuilder.categories.update');


});