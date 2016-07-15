<?php

class human
{
    public $race;

    public function __construct()
    {
    }

    public function printHuman ($race) {
        echo 'Race: ' . $this->race = $race . '<br>';
    }

    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    }
}
