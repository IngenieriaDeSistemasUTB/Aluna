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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [
        'uses' => 'HomeController@index',
        'as' => 'home'
    ]


);

Route::get('login', [
      'uses' => 'Auth\AuthController@getLogin',
      'as' => 'login'
]);
Route::post('login', 'Auth\AuthController@postLogin');
Route::get('logout', [
  'uses' => 'Auth\AuthController@getLogout',
  'as' => 'logout'
]);
Route::get('principal', [ 'middleware' => 'auth',
        'uses' => 'HomeController@principal',
        'as' => 'principal'
    ]


);
// Registration routes...
Route::get('register', [
    'uses'=> 'Auth\AuthController@getRegister',
  'as' => 'register'
  ]);
Route::post('register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
Route::get('password', 'Auth\PasswordController@getEmail');
Route::post('password', 'Auth\PasswordController@postEmail');
Route::get('changepassword', ['middleware' => 'auth',
      'uses' => 'changePassword@index',
      'as' => 'changepassword'
  ]);
Route::post('changepassword', 'changePassword@postResetPassword');

// Password reset routes...
Route::get('reset/{token}', 'Auth\PasswordController@getReset');
Route::post('reset', 'Auth\PasswordController@postReset');

Route::get('formulario', [
  'middleware' => 'auth',
  'uses' => 'StorageController@index',
  'as'  =>  'file'
  ]);
Route::post('formulario','StorageController@save');
Route::get('formulario/{archivo}',[
  'middleware' => 'auth',
  'uses'=> 'StorageController@download']);

  /*Route::get('inscripcion', function (){
      return view('inscripcion');
    });*/
    /*Route::get('/', function () {
        return view('welcome');
    });*/

    Route::get('inscripcion',[
      'uses' => 'InscripcionController@index',
      'as' => 'inscripcion'
    ]);
    Route::post('inscripcion','InscripcionController@create');

    Route::get('alumnostabla',[
      'uses' => 'EditarController@index',
      'as'  =>'alumnostabla'
    ]);
