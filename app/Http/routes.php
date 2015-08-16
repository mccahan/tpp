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

use Illuminate\Http\Request;


Route::get('login', 'AuthController@login');
Route::get('logout', 'AuthController@logout');

Route::post('submit', 'UserController@update');

Route::get('thanks', function () {
    return view('pages.thanks');
});

Route::get('/', function (Request $request) {
    
    //return redirect()->to('api/v1/tasks');

	if(Auth::check())
	{
		return view('pages.registered');
	} 
	return view('pages.login');


});


