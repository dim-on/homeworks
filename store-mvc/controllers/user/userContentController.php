<?php

class userContentController
{
    protected $userProductResponse;
    protected $userCatalogueResponse;

    public function __construct()
    {
        $this->userProductResponse = new productsClass();
        $this->userCatalogueResponse = new catalogueClass();
    }

    public function printProducts() {
        return $this->userProductResponse->productList ();
    }

    public function printCatalogues() {
        return $this->userCatalogueResponse->catalogueList();
    }
}