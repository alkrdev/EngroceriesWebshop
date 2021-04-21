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

    public function showCreateProductPage(){
        return view('CreateProductpage');
    }

    public function createProduct(){
        $product_number = $_POST['product_number'];
        $product_image = $_FILES['image'];
        $product_name = $_POST['product_name'];
        $product_description = $_POST['description'];
        $product_price = $_POST['price_per_unit'];

        $this->uploadImage($product_image);

        var_dump($product_image);
    }

    public function uploadImage($image){
        // Where the file is going to be placed
        $target_path = "/";

        /* Add the original filename to our target path.
        Result is "uploads/filename.extension" */
        $target_path = $target_path . basename( $image['name']);
    }

    public function moveUploadedImage(){
        $target_path = "uploads/";

        $target_path = $target_path . basename( $_FILES['uploadedfile']['name']);

        if(move_uploaded_file($_FILES['uploadedfile']['tmp_name'], $target_path)) {
            echo "The file ".  basename( $_FILES['uploadedfile']['name']).
                " has been uploaded";
        } else{
            echo "There was an error uploading the file, please try again!";
        }
    }

}




