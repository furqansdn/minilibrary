<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/',[
    'uses' => 'Frontend\\HomepageController@index',
    'as'   => 'homepage'
]);

Route::get('book/{book}',[
    'uses' => 'Frontend\\HomepageController@show',
    'as'   => 'homepage.book'
]);

Route::post('book/{book}/borrow',[
    'uses' => 'Frontend\\HomepageController@borrow',
    'as'   => 'homepage.book.borrow'
])->middleware('auth');



Auth::routes(['verify' => true ]);


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');
