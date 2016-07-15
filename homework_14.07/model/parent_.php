<?php

/**
 * Created by PhpStorm.
 * User: uncha
 * Date: 15.07.2016
 * Time: 14:40
 */
class parent_ extends citizen
{
    public $family_status , $parentName;
    protected static $parQuantity;

    public function __construct()
    {
    }

    public function printParent ($family_status, $parentName) {
        self::$parQuantity ++;
        echo 'Family status: ' . $this->family_status = $family_status . '<br>';
        echo 'Parent name: ' . $this->parentName = $parentName . '<br>';
    }

    public static function getParQuantity()
    {
        return self::$parQuantity;
    }

    public function childrenQuantity () {
        echo child_::getChildQuantity();
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}