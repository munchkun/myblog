<?php


//ホーム画面
Route::get('/', 'TopController@index');


//ブログ画面
Route::get('blog/', 'TopController@blog');
Route::get('blog/researcher', 'TopController@blogresearcher');
Route::get('blog/mugi', 'TopController@blogmugi');
Route::get('column_detail/{id}', 'TopController@columndetail');


Route::get('donation/', function () {
    return view('contents/donation');
});


Route::get('app/', function () {
    return view('contents/app');
});


Route::get('contact/', function () {
    return view('contents/contact');
});


//Login

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
