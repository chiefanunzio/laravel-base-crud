<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'crudController@homeFun')
       ->name('home');

Route::get('/ospite/{id}', 'crudController@ospiteFun')
       -> name('ospite');   

Route::get('/form/ospite' , 'crudController@formFun')
       ->name('form');   

Route::post('/add-db/ospite','crudController@dbFun')   
       ->name('add-db');         