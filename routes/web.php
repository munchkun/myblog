<?php


//ホーム画面
Route::get('/', 'TopController@index');


//ブログ画面
Route::get('blog/', 'TopController@blog');
Route::get('blog/researcher', 'HomeController@blogresearcher');
Route::get('blog/mugi', 'TopController@blogmugi');
Route::get('column_detail/{id}', 'TopController@columndetail');


Route::get('donation/', function () {return view('contents/donation');});

Route::get('donation/menu', function () {return view('contents/donation_menu');});
Route::get('donation/for_site', function () {
    return view('contents/donation_for_site');
});
Route::post('donation/for_site', 'TopController@donation');
Route::get('/logout', 'HomeController@logout');

Route::get('app/', function () {
    return view('contents/app');
});


Route::get('contact/', function () {
    return view('contents/contact');
});


//Login

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


//FACEBOOKLOGIN
Route::get('auth/login', 'Auth\SocialController@viewLogin');
Route::get('auth/login/facebook', 'Auth\SocialController@redirectToFacebookProvider');
Route::get('auth/facebook/callback', 'Auth\SocialController@handleFacebookProviderCallback');
