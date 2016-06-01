<?php
$result=0;
$arr=array(1, 20, 15, 17, 24, 35);
    foreach ($arr as $item) {
        echo "$item<br>";
        $result+=$item;
    }
echo 'Sum is '.$result;