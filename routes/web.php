<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');
//Router::post('/', 'HomeController@login')->name('login');
Router::post('/orders', 'HomeController@orders')->name('orders');
Router::post('/varelager', 'HomeController@storage')->name('storage');
Router::post('/adminpanel', 'HomeController@adminpanel')->name('adminpanel');
Router::post('/dashboard', 'HomeController@dashboard')->name('dashboard');

Router::post('/', 'HomeController@logout')->name('logout');

Router::group(['prefix' => '/shop'], function () {
    Router::post('/', 'HomeController@login')->name('login');
    Router::post('/', 'HomeController@Shop')->name('Shop');
    Router::get('/product/{id?}', 'HomeController@getProduct');
});

