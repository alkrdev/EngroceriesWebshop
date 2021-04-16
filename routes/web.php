<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');
Router::post('/', 'HomeController@login')->name('login');
Router::post('/', 'HomeController@logout')->name('logout');

Router::get('/product/{id?}', 'HomeController@getProduct');