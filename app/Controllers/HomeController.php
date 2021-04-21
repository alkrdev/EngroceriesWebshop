<?php

namespace App\Controllers;

use App\DatabaseConnection;

class HomeController
{
    public function index() {
        $_SESSION["error"] = "";
        if (!$_POST['psw']){
            $_SESSION['loginFailed'] = true;
            redirect('/login');
        }

    }

    public function storage()
    {
        return view('Storage');
    }

    public function orders()
    {

        return view('Orders');
    }

    public function adminpanel()
    {
        return view('adminpanel');
    }

    public function dashboard()
    {

        return view('dashboard');
    }

}




