<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'Homecontroller@index');

//Login
Router::get('/login','HomeController@login');
Router::post('/login', 'HomeController@login')->name('login');

//register
Router::get('/register', 'HomeController@register')->name('register');
Router::post('/register', 'HomeController@register')->name('register');

Router::post('/', 'HomeController@logout')->name('logout');

Router::get('/orders', 'HomeController@orders')->name('orders');
Router::get('/storage', 'HomeController@storage')->name('storage');
Router::get('/adminpanel', 'HomeController@adminpanel')->name('adminpanel');
Router::get('/dashboard', 'HomeController@dashboard')->name('dashboard');


Router::group(['prefix' => '/shop'], function () {
    Router::get('/', 'HomeController@Shop')->name('Shop');
    Router::get('/product/{id?}', 'HomeController@getProduct');
});

