<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'crudController@homeFun')
       ->name('home');

Route::get('/ospite/{id}', 'crudController@ospiteFun')
       -> name('ospite');          