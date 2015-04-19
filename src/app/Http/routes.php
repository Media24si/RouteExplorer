<?php

Route::get('/routes', 'Media24si\RouteExplorer\app\Http\Controllers\ListController@routes');

Route::get('/routes-test', 'Media24si\RouteExplorer\app\Http\Controllers\ListController@matchRoute');