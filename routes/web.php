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

Auth::routes();

Route::get('/', function () {
		return view('home');
});

Route::get('/free_tips', function () {
		return view('home');
});

Route::get('/my_account', function () {
		return view('account');
});

Route::get('/admin', 'ApiController@index')->middleware('admin');

Route::get('/login', function () {
		return view('auth.login');
});

Route::get('/premium_tips', function () {
	if(Auth::user())
	{
		return view('premium');
	}
	else
	{
		return view('auth.login');
	}
});

Route::get('/premium_tips_results', function () {
	if(Auth::user())
	{
		return view('results');
	}
	else
	{
		return view('auth.login');
	}
});

//Route::get('/home', 'TheController@index');
// Route::get('/', function(){
// 	$id = 1;
// 	$year = 2016;
//     $leg = Football::getLeagues($year);
//     return $leg;
// });
Route::get('/home', 'HomeController@index');


