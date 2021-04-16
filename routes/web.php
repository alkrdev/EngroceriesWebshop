<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');
Router::post('/', 'HomeController@login')->name('login');
Router::post('/orders', 'HomeController@orders')->name('orders');
Router::post('/varelager', 'HomeController@storage')->name('storage');
Router::post('/adminpanel', 'HomeController@adminpanel')->name('adminpanel');
Router::post('/dashboard', 'HomeController@dashboard')->name('dashboard');
Router::post('/shop', 'HomeController@Shop')->name('Shop');
Router::post('/', 'HomeController@logout')->name('logout');