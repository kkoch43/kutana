<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/**
 * Home
 */

Route::get('/', [
    'uses'=> 'HomeController@index',
    'as'=> 'home',
]
);

Route::get('alert', function (){
    return redirect()->route('home')->with('info', 'You have signed up!');
});

/**
 * Auth
 */

Route::get('signup', [
    'uses'=> 'AuthController@getSignup',
    'as'=> 'auth.signup',
    'middleware'=> ['guest'],
]);

Route::post('signup', [
    'uses'=> 'AuthController@postSignup',
    'middleware'=> ['guest'],
]);

Route::get('signin', [
    'uses'=> 'AuthController@getSignin',
    'as'=> 'auth.signin',
]);

Route::post('signin', [
    'uses'=> 'AuthController@postSignin',
]);

Route::get('signout', [
    'uses'=> 'AuthController@signout',
    'as'=> 'auth.signout',
]);

/**
 * Search
 */
Route::get('search', [
    'uses'=> 'SearchController@getResults',
    'as'=> 'search.results',
]);

/**
 * profile
 */

Route::get('user/{username}', [
    'uses' => 'ProfileController@getProfile',
    'as' => 'profile.index',
]);