<?php

Route::singularResourceParameters();

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('products', 'ProductController');
