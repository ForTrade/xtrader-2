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

/**
 * Define routes pattern 
 */
Route::pattern('slug', '[a-z0-9-]+');
Route::pattern('id', '\d+');
//Route::pattern('hash', '[a-z0-9]+');
//Route::pattern('hex', '[a-f0-9]+');
//Route::pattern('uuid', '[0-9a-f]{8}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{4}-[0-9a-f]{12}');
//Route::pattern('base', '[a-zA-Z0-9]+');
//Route::pattern('username', '[a-z0-9_-]{3,16}');

/**
 * Define frontend routes 
 */
Route::get('/', array('as'=>'home', 'uses'=>'HomeController@index'));
Route::get('c/{slug}', array('as'=>'category', 'uses'=>'CategoryController@show'));
Route::get('p/{slug}', array('as'=>'product', 'uses'=>'ProductController@show'));
Route::get('v/{slug}', array('as'=>'vendor', 'uses'=>'VendorController@show'));

//Route::resource('products', 'ProductsController');
