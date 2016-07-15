<?php

/**
 * Created by PhpStorm.
 * User: uncha
 * Date: 15.07.2016
 * Time: 14:34
 */
class citizen extends human
{
    public $nationality, $sex,  $age;

    public function __construct()
    {
    }

    public function printCitizen ($nationality, $sex,  $age) {
        echo 'Nationality: ' . $this->nationality = $nationality . '<br>';
        echo 'Sex: ' . $this->sex = $sex . '<br>';
        echo 'Age: ' . $this->age = $age . '<br>';
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}