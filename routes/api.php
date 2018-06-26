<?php

Route::group(['middleware' => 'auth:api'], function () {
    Route::get('options', 'Api\OptionController@index');
    Route::get('options/{option}', 'Api\OptionController@show');
    Route::post('options', 'Api\OptionController@store');
    Route::put('options/{option}', 'Api\OptionController@update');
    Route::delete('options/{option}', 'Api\OptionController@delete');
});
