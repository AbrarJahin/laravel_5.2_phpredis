<?php

Route::get('/', [
    'uses'			=> 'RedisController@getIndex',
    'middleware'	=> 'web',
    'as'			=> 'index'
]);


Route::get('article/{id}', [
    'uses'			=> 'RedisController@getArticle',
    'middleware'	=> 'web',
    'as'			=> 'index'
]);