<?php

Route::group(['middleware' => ['web'],'prefix' => '/lecturer'], function() {

Route::get('/csv/fileupload/{course}/{filetype}','EONConsulting\Storyline\Table\Http\Controllers\DefaultController@getFileuploadView');
Route::match(['get','post'],'/csv/storeStoryline/{course}','EONConsulting\Storyline\Table\Http\Controllers\DefaultController@storeStoryline');

});
