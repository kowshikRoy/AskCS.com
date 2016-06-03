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

Route::get('/', function () {
	if(Auth::guest())return view('welcome');
	else return redirect('/home');
    
});

Route::auth();

//Route::get('/home', 'HomeController@index');

Route::group(['middleware' => ['auth']], function()
{
	Route::get('/home',['as' => 'home', 'uses' => 'PostController@index']);
	Route::get('profile' , 'UserController@profilephoto');
	Route::post('profile', 'UserController@update_avatar');
	Route::get('req/{str}', 'UserController@searchinfo');
	Route::get('about' , 'UserController@about');
	Route::get('contact','UserController@contact');
	Route::post('feedback','UserController@feedback');
	Route::get('searchbypostinput','PostController@searchbypostin');
	Route::get('searchbyuserinput','PostController@searchbyuserin');
	Route::get('new-post','PostController@create');
	Route::post('new-post','PostController@store');
	Route::get('edit/{slug}','PostController@edit');
	Route::post('update','PostController@update');
	Route::get('delete/{id}','PostController@destroy');
	Route::get('/{slug}',['as' => 'post', 'uses' => 'PostController@show'])->where('slug', '[A-Za-z0-9-_]+');
	Route::post('comment/add','CommentController@store');
 
 	Route::post('comment/delete/{id}','CommentController@distroy');
 	Route::get('my-all-posts','UserController@user_posts_all');
 
 	Route::get('my-drafts','UserController@user_posts_draft');

 	
 	Route::post('searchforpost','PostController@searchforpostresult');
 	Route::post('searchforuser','PostController@searchforuserresult');
 	
});
Route::get('user/{id}','UserController@profile')->where('id', '[0-9]+');

Route::get('user/{id}/posts','UserController@user_posts')->where('id', '[0-9]+');

Route::get('user/{id}/drafts','UserController@user_drafts')->where('id', '[0-9]+');