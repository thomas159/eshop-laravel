<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@ShowAll');

//Products Routes
Route::get('products', 'ProductsController@ShowAll');
Route::get('products/{id}', ['as' => 'products.id', 'uses' => 'ProductsController@ShowProductsById']); 

/*
View::composer('includes.navbar', function($view)
  {
      $view->with("friendRequest", Friend::FriendsRequest()->count());
  });
*/
 