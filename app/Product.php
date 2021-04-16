<?php

namespace App;

class Product
{
    protected string $id;
    protected string $product_number;
    protected string $image;
    protected string $name;
    protected string $description;
    protected string $price_per_unit;
    protected string $created_at;
    protected string $updated_at;

    public function __construct
    (
        string $id = '',
        string $product_number = '',
        string $image = '',
        string $name = '',
        string $description = '',
        string $price_per_unit = '',
        string $created_at = '',
        string $updated_at = ''
    )
    {
        $this->id = $id;
        $this->product_number = $product_number;
        $this->image = $image;
        $this->name = $name;
        $this->description = $description;
        $this->price_per_unit = $price_per_unit;
        $this->created_at = $created_at;
        $this->updated_at = $updated_at;
    }
}