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

Route::get('/', function()
{
    return View::make('hello');
});

Route::resource('products', 'ProductsController');

Route::get('c/{$slug}', array('as'=>'category', 'use'=>'CategoryController@show'));
Route::get('p/{$slug}', array('as'=>'product', 'use'=>'ProductController@show'));
Route::get('v/{$slug}', array('as'=>'vendor', 'use'=>'VendorController@show'));