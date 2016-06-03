<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
    print_r($arr);
    echo "<br>";

    $en="";
    $ru="";

    foreach ($arr as $key=>$value) {
            $en[]=$key;
            $ru[]=$value;
        }

    print_r($en);
    echo "<br>";
    print_r($ru);