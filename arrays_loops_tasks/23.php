<?php
$a=222;
$res='';
    if (is_numeric($a)) {
        $a=(string)$a;
        $arr=str_split($a);        
            foreach ($arr as $item) {
                $res+=$item;
            }
        echo $res;
    } else {
        echo 'Invalid variable type!';
    }

