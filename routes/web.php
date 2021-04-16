<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::get('/', 'HomeController@index');

Router::post('/', 'HomeController@login')->name('login');
Router::post('/', 'HomeController@register')->name('register');
Router::post('/', 'HomeController@logout')->name('logout');