<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');
//Router::post('/', 'HomeController@login')->name('login');
Router::post('/orders', 'HomeController@orders')->name('orders');
Router::post('/varelager', 'HomeController@storage')->name('storage');
Router::post('/adminpanel', 'HomeController@adminpanel')->name('adminpanel');
Router::post('/dashboard', 'HomeController@dashboard')->name('dashboard');

Router::post('/register', 'HomeController@register')->name('register');
Router::post('/', 'HomeController@logout')->name('logout');


Router::group(['prefix' => '/shop'], function () {
Router::post('/', 'HomeController@login')->name('login');
Router::post('/', 'ShopController@Shop')->name('Shop');
Router::post('/lowprice', 'ShopController@lowPrice')->name('lowPrice');
Router::post('/highprice', 'ShopController@highPrice')->name('highPrice');
Router::post('/a-z', 'ShopController@az')->name('az');
Router::post('/z-a', 'ShopController@za')->name('za');

Router::get('/product/{id?}', 'ShopController@getProduct');
});

