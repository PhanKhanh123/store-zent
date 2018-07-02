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

// Route::get('/', function () {
//     return 'Ahihi';
// })->middleware('checkage');

// // Auth::routes();
// Route::middleware('auth')->group(function(){
// 	Route::get('/home', 'HomeController@index')->name('home');

// 	// Route::get('/index', 'HomeController@index')->name('home');
// });

Route::prefix('admin')->group(function(){
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
	Route::post('login', 'Auth\LoginController@login');
	Route::post('logout', 'Auth\LoginController@logout')->name('logout');

        // Registration Routes...
	Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	Route::post('register', 'Auth\RegisterController@register');

        // Password Reset Routes...
	Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
	Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
	Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
	Route::post('password/reset', 'Auth\ResetPasswordController@reset');


	Route::middleware('auth')->group(function(){
		Route::get('dashboard', 'HomeController@index')->name('dashboard');
		Route::get('users/list', 'HomeController@getList')->name('users.list');
	});
});
Route::get('/', function() {
    return view('home');
});

Route::delete('posts/{id}', 'HomeController@destroy')->name('posts.destroy');
