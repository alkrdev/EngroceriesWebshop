<?php

namespace App\Controllers;

use App\DatabaseConnection;

class ShopController
{
    //Return view begins here 
    public function shop()
    {

        return view('Shop', $this->getProducts());
    }
 
    public function lowPrice()
    {
        return view('shop', $this->getLowprice());
    }

    public function highPrice()
    {
        return view('shop', $this->getHighprice());
    }

    public function az()
    {
        return view('shop', $this->getAz());
    }

    public function za()
    {
        return view('shop', $this->getZa());
    }
    //Return view ends here 


    //Filter function sort by low price
    public function getLowprice()
    {
        $db = new DatabaseConnection();
        $db->Connect();
        return $db->QueryWithParamsFetchAll(<<<SQL
            SELECT id, image, name, description, price_per_unit, LPAD(product_number, 13, 0) as product_number FROM products ORDER BY price_per_unit 
       SQL, []);
    }

    //Filter function sort by high price
    public function getHighprice()
    {
        $db = new DatabaseConnection();
        $db->Connect();
        return $db->QueryWithParamsFetchAll(<<<SQL
            SELECT id, image, name, description, price_per_unit, LPAD(product_number, 13, 0) as product_number FROM products ORDER BY price_per_unit DESC
       SQL, []);
    }

    //Filter function sort by A-Z
    public function getAz()
    {
        $db = new DatabaseConnection();
        $db->Connect();
        return $db->QueryWithParamsFetchAll(<<<SQL
            SELECT id, image, name, description, price_per_unit, LPAD(product_number, 13, 0) as product_number FROM products ORDER BY name ASC
        SQL, []);
    }

    //Filter function sort by Z-A
    public function getZa()
    {
        $db = new DatabaseConnection();
        $db->Connect();
        return $db->QueryWithParamsFetchAll(<<<SQL
            SELECT id, image, name, description, price_per_unit, LPAD(product_number, 13, 0) as product_number FROM products ORDER BY name DESC
        SQL, []);
    }

    //Get products 
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
    
  

}
