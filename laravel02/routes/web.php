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

use App\Http\Middleware\CheckAge;


Route::get('/', function () {
    return view('welcome');
});
Route::get('home', function () {
    return view('welcome');
});
Route::get('users/{id?}/friends', function ($idwe = 'fallbackId') {
  return $idwe;
});
Route::get('users/{id?}', function ($idwe = 'fallbackId') {
  return $idwe.'number';
});
// })->where('id', [0-9]+);

Route::get('users/{name}', function ($name) {
  return $name.'string';
})->where(['name', '[a-z]+']);
Route::redirect('/a', 'users/name');
// Route::view('/route', 'route', ['link' => 'link string']);

Route::group(['prefix' => 'route'], function () {
  Route::get('/', function () {
    return view('route', ['link' => 'link string']);
  });
  Route::get('route2', function () {
    return view('route2');
    // return view('route2')->share('varName', 'varValue');
  });
});

Route::group(['domain' => 'li.laravel02.com'], function () {
  Route::get('/', function () {
    return view('route', ['link' => 'account']);
  });
});

Route::group(['namespace' => 'Route', 'prefix' => 'route'], function () {
  Route::get('first', function () {
    return view('route.first', ['content' => 'ff']);
  });
});

Route::group(['namespace' => 'Middle', 'prefix' => 'middle'], function () {
  Route::get('first', function () {
    return view('middle.first');
  });
  Route::get('second', function () {
    return view('middle.second');
  // });
  })->middleware(CheckAge::class);
});

Route::get('data', 'DataController@index');
Route::get('addData', 'DataController@addData');
Route::get('removeData', 'DataController@removeData');
Route::get('testusers', 'TestUsersController@index');
Route::get('testUsersAdd', 'TestUsersController@add');
