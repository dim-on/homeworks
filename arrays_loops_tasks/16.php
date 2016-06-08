<?php
//не работает пока!
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$i=0;
    foreach ($arr as $key=>$value){
        //echo $value;
        $i=$i++;
        if ($i<=3){
            echo $value;
        } elseif ($i<=6&&$i>3){
            echo '<br>';
            echo $value;
        } else {
            echo '<br>';
            echo $value;
        }
    }