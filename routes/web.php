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

//dashboard
Router::group(['prefix' => '/dashboard'], function () {
    Router::get('/', 'HomeController@dashboard')->name('dashboard');
    Router::get('/orders', 'HomeController@orders')->name('orders');
    Router::get('/storage', 'HomeController@storage')->name('storage');

    Router::group(['prefix' => '/create-product'], function (){
        Router::get('/', 'HomeController@showCreateProductPage')->name('show-create-product');
        Router::post('/', 'HomeController@createProduct')->name('create-product');
    });
    Router::group(['prefix' => '/applications'], function () {
        Router::get('/', 'HomeController@showApplications')->name('show-applications');
        Router::post('/confirm','UserController@confirmApplication')->name('confirm-application');
        Router::post('/deny', 'UserController@denyApplication')->name('deny-application');
    });

});

//Shop
Router::group(['prefix' => '/shop'], function () {
    Router::get('/', 'ShopController@Shop')->name('Shop');
    Router::post('/lowprice', 'ShopController@lowPrice')->name('lowPrice');
    Router::post('/highprice', 'ShopController@highPrice')->name('highPrice');
    Router::post('/a-z', 'ShopController@az')->name('az');
    Router::post('/z-a', 'ShopController@za')->name('za');
    Router::get('/product/{id?}', 'ShopController@getProduct');
});

