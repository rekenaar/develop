<?php

Route::group(['middleware' => ['web'], 'prefix' => 'student', 'namespace' => 'EONConsulting\Student\Progression\Http\Controllers'], function() {
    //Route::group(['middleware' => ['auth']], function() {

        //Route::get('/csv/fileupload/{course}/{filetype}','EONConsulting\Storyline\Table\Http\Controllers\DefaultController@getFileuploadView');
        Route::post('/progression', 'DefaultController@storeProgress')->name('student.progression');
        Route::get('/view-topic/{item}/{course}', 'DefaultController@topicView')->name('student.topic.view');
        Route::get('/view-next/{item}', 'DefaultController@nextView')->name('student.next.view');
        //Route::match(['post'],'/storeContent','EONConsulting\Storyline\Table\Http\Controllers\DefaultController@storeContent');
    //});
});
