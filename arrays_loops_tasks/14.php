<?php
$arr=array(4, 2, 5, 19, 13, 0, 10);
    foreach ($arr as $e=>$value) {
        echo $e.'=>'.$value.'<br>';
            if ($value==2 || $value==3 || $value==4) {
                echo 'Есть! <br>';
            } else {
                echo 'Нет!<br>';
            }
    }