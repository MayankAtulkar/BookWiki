<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|


*/
/*
Route::get('/', function () {
    return view('welcome');
});
*/
Route::get('/about','PageController@about');

Route::get('/contact','PageController@contact');

Route::get('/books', 'BooksController@page1');

Route::get('/{id}',[ 
	'as'    =>  'profile', 
	'uses'  =>  'BooksController@page2'
	]);



/*
Route::resource('users', 'UsersController');

Route::get('/', function () {
    return view::make('index');
});

Route::get('/details', function () {
    return view::make('details');
});

Route::group(array('prefix' => 'api/v1', 'before' => 'auth.basic'), function()
{
    Route::resource('pages', 'PagesController', array('only' => array('index', 'store', 'show', 'update', 'destroy')));
    Route::resource('users', 'UsersController');
});
*/


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
