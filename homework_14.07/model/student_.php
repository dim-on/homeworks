<?php

/**
 * Created by PhpStorm.
 * User: uncha
 * Date: 15.07.2016
 * Time: 14:37
 */
class student_ extends citizen
{
    public $beginYear, $completionYear;

    public function __construct()
    {
    }

    public function printStudent ($beginYear, $completionYear) {
        echo 'Year of beginning: ' . $this->beginYear = $beginYear . '<br>';
        echo 'Year of completion: ' . $this->completionYear = $completionYear . '<br>';

    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}