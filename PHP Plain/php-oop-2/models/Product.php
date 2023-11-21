<?php

require_once __DIR__ . '/Category.php';

class Product
{
    public $image;
    public $label;
    public $description;
    public $category;
    private $price;

    public function __construct($_label, $_description, Category $_category, $_price, $_image = null)
    {
        $this->label = $_label;
        $this->description = $_description;
        $this->category = $_category;
        $this->setPrice($_price);
        $this->image = $_image;
    }

    protected function setPrice($price)
    {
        if (!is_numeric($price) || $price <= 0) return false;
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}
