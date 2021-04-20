<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'Homecontroller@index');

//Login
Router::get('/login','UserController@login');
Router::post('/login', 'UserController@login')->name('login');
//register
Router::get('/register', 'UserController@register');
Router::post('/register', 'UserController@SendApplication')->name('register');

Router::post('/', 'UserController@logout')->name('logout');

Router::get('/orders', 'HomeController@orders')->name('orders');
Router::get('/storage', 'HomeController@storage')->name('storage');
Router::get('/adminpanel', 'HomeController@adminpanel')->name('adminpanel');
Router::get('/dashboard', 'HomeController@dashboard')->name('dashboard');


//Shop
Router::group(['prefix' => '/shop'], function () {
    Router::get('/', 'ShopController@Shop')->name('Shop');
    Router::post('/lowprice', 'ShopController@lowPrice')->name('lowPrice');
    Router::post('/highprice', 'ShopController@highPrice')->name('highPrice');
    Router::post('/a-z', 'ShopController@az')->name('az');
    Router::post('/z-a', 'ShopController@za')->name('za');
    Router::get('/product/{id?}', 'ShopController@getProduct');
});

