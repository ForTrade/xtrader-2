<?php

/*
  |--------------------------------------------------------------------------
  | Application Routes
  |--------------------------------------------------------------------------
  |
  | Here is where you can register all of the routes for an application.
  | It's a breeze. Simply tell Laravel the URIs it should respond to
  | and give it the Closure to execute when that URI is requested.
  |
 */

Event::listen('illuminate.query', function($sql)
{
    if (!App::runningInConsole())
        print_r("<pre>" . $sql . "</pre>");
});

Route::get('/', array('as'=>'home', 'uses'=>'HomeController@index'));

Route::resource('products', 'ProductsController');

Route::get('c/{$slug}', array('as'=>'category', 'uses'=>'CategoryController@show'));
Route::get('p/{$slug}', array('as'=>'product', 'uses'=>'ProductController@show'));
Route::get('v/{$slug}', array('as'=>'vendor', 'uses'=>'VendorController@show'));