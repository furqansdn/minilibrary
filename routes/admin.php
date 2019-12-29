<?php

Route::get('/',[
    'uses' => 'HomeController@index',
    'as'   => 'dashboard'
]);

Route::get('/author',[
    'uses' => 'AuthorController@index',
    'as'   => 'author'
]);

Route::get('/author/create',[
    'uses' => 'AuthorController@create',
    'as'   => 'author.create'
]);

Route::post('/author/store',[
    'uses' => 'AuthorController@store',
    'as'   => 'author.store'
]);

Route::get('/author/edit/{author}',[
    'uses' => 'AuthorController@edit',
    'as'   => 'author.edit'
]);

Route::put('/author/update/{author}',[
    'uses' => 'AuthorController@update',
    'as'   => 'author.update'
]);

Route::delete('/author/destroy/{author}',[
    'uses' => 'AuthorController@destroy',
    'as'   => 'author.destroy'
]);

Route::get('/author/data',[
    'uses' => 'DataController@authors',
    'as'   => 'author.data'
]);

Route::get('/book/data',[
    'uses' => 'DataController@books',
    'as'   => 'book.data'
]);


Route::resource('/book', 'BookController');

