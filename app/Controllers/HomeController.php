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

    public function showApplications()
    {
        $db = new DatabaseConnection();
        $db->Connect();

        $applicants = $db->QueryWithParamsFetchAll(<<<SQL
            SELECT * FROM users WHERE role = 'Advanced' AND active = 0
        SQL, []);
        return view('Applicationpage', $applicants);
    }

    public function dashboard()
    {
        return view('dashboard');
    }

}




