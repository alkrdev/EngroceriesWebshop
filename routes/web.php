<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');
Router::get('/register', 'HomeController@register')->name('register');

Router::post('/', 'HomeController@login')->name('login');
Router::post('/', 'HomeController@logout')->name('logout');