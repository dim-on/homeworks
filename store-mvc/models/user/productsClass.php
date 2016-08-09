<?php

class productsClass
{
    protected $printProducts;

    public function __construct()
    {
        //in future  - accepting of products data from DB
    }

    public function productList () {
        return $this->printProducts = 'product 1' . '</br>' . 'product 2' . '</br>';
    }
}