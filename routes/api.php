<?php

Route::get('options', 'Api\OptionsController@index');
Route::get('options/{option}', 'Api\OptionsController@show');
Route::post('options', 'Api\OptionsController@store');
Route::patch('options/{option}', 'Api\OptionsController@update');
Route::delete('options/{option}', 'Api\OptionsController@delete');
