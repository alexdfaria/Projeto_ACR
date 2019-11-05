<?php

Route::get('/', function () {
    return view('welcome');
    
});

Route::get('/home', 'HomeController@index');

Route::get('/procura', 'ProcuraController@index');

Route::get('/movie', 'FilmeController@index');

Auth::routes();


