<?php

/**
 * Created by PhpStorm.
 * User: uncha
 * Date: 15.07.2016
 * Time: 14:40
 */
class child_ extends parent_
{

    public $childName;
    protected static $childQuantity;

    public function __construct()
    {
    }

    public function parentCheck() {
        if (parent_::getParQuantity()!=2) {
            return $this;
        } else {
            exit('!');
        }
    }
    public function printChild ($childName) {
        self::$childQuantity ++;
        echo 'Child Name: ' . $this->childName = $childName . '<br>';
    }

    /**
     * @return mixed
     */
    public static function getChildQuantity()
    {
        return self::$childQuantity;
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}