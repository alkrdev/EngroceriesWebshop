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



    public function getProducts()
    {
        $db = new DatabaseConnection();
        $db->Connect();

        return $db->QueryWithParamsFetchAll(<<<SQL
            SELECT id, image, name, description, price_per_unit, LPAD(product_number, 13, 0) as product_number FROM products
       SQL, []);
    }

    public function getProduct($id)
    {
        $db = new DatabaseConnection();
        $db->Connect();

        $product = $db->QueryWithParamsFetchAll(<<<SQL
            SELECT id, image, name, description, price_per_unit, LPAD(product_number, 13, 0) as product_number FROM products WHERE product_number = ?
        SQL, [$id]);

        return view('Productpage', $product);
    }

    public function shop()
    {
        return view('Shop', $this->getProducts());
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




