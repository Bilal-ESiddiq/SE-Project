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


/*Route::get('/', function () {
    return view('welcome');
});
*/
//Route::get('/','homeController@index');

/*Route::get('about',function() {
	$x = ['This','is','x'];
	return view('about',['x'=>$x]);
});*/





//Route::get('login','login@login1');
//Route::post('store','login@checklogin');

Auth::routes();
Route::get('/',function() {
	return view('HomePageOfficial');
});


Route::get('/logout',function(){
	return view('logout');
});
Route::get('/home', 'HomeController@index');

//For google+
Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');
////////////////////////


//for facebook 
Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');
Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');

////
Route::get('/profile',function (){
	return view('profilePageClient');
});


/*
Route::get('/reset',function(){
	return view('Auth.passwords.reset');
});
*/
//Route::get('/index',['middleware'=>'firstmiddleware','uses'=>'HomeController@index']);