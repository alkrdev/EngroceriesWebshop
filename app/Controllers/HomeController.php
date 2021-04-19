<?php

namespace App\Controllers;

use App\DatabaseConnection;

class HomeController
{
    public function index() {
        $_SESSION["error"] = "";
        return view('Loginpage');
    }

    public function register() {
        return view('Register');
    }

    public function login() {
        if (isset($_POST['login-submit'])) {
            if (isset($_POST['email']) && isset($_POST['psw'])) {
                $email = $_POST['email'];
                $pass = $_POST['psw'];

                $pdo = new DatabaseConnection();
                $pdo->Connect();
                $rows = $pdo->QueryWithParamsFetchAll("SELECT id, email, password, name, role FROM users WHERE email = ?", [$email]);

                if (count($rows) > 0) {
                    $row = $rows[0];
                    if ($row['password'] == hash('sha256', $pass)) {

                        $_SESSION['is_auth'] = true;
                        $_SESSION['user_role'] = $row['role'];
                        $_SESSION['user_id'] = $row['id'];
                        $_SESSION['name'] = $row['name'];

                        return view('Shop', $this->getProducts());
                    } else {
                        $_SESSION['error'] = "Invalid email or password. Please try again.";
                        return view('Loginpage');
                    }
                } else {
                    $_SESSION['error'] = "Invalid email or password. Please try again.";
                    return view('Loginpage');
                }
            } else {
                $_SESSION['error'] = "Please enter an email and password to login.";
                return view('Loginpage');
            }
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

    public function logout()
    {
        unset($_SESSION['is_auth']);
        unset($_SESSION['user_role']);
        unset($_SESSION['user_id']);
        unset($_SESSION['name']);

        $_SESSION = [];

        session_destroy();

        return view('Loginpage');
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




