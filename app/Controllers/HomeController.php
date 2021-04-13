<?php
namespace App\Controllers;
use DatabaseConnection;

class HomeController
{
    public function index()
    {
        return view('Loginpage');
    }

}