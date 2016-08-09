<?php

class catalogueClass
{
    protected $printCatalogues;

    public function __construct()
    {
        //in future  - accepting of catalogue list from DB
    }

    public function catalogueList () {
        return $this->printCatalogues = 'catalogue item 1' . '</br>' . 'catalogue item 2' . '</br>';
    }
}