<?php
$arr=array(1, 2, 3, 4, 5, 6, 7, 8, 9);
$i=0;
    foreach ($arr as $key=>$value){
            if ($key<3&&$key>=0) {
                echo $value;
                $i++;
                    if ($i==3) {
                        echo '<br>';
                    }
            } elseif ($key>=3&&$key<=5) {
                echo $value;
                $i++;
                    if ($i==6) {
                        echo '<br>';
                    }
            } else {
                echo $value;
                }
    }   