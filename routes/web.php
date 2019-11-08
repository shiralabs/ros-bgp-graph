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

Route::get('/', "IndexController@index")->name('index');

Route::group(['prefix' => "/graphs"], function ($route) {
    $route->get('/route/{id}', 'GraphController@route')->name('graph_route');
    $route->get('/ix/{id}', 'GraphController@ix')->name('graph_ix');
    $route->get('/img/{type}/{id}/{name}', 'GraphController@img')->name('graph_img');

});
