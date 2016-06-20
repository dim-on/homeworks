<?php
for ($i=0;$i<=20;$i++) {
    $arr[$i] = rand(1, 100);
}
$res=1;

        foreach ($arr as $value) {
            $itemArr=str_split($value);
            $count=count($itemArr);
                   if ($count==2 && $itemArr[0]==$itemArr[1] && $value>0) {
                       $res = $res*$value;
                   } elseif ($count==2 && $itemArr[0]!==$itemArr[1] && $value>0) {
                           echo "$value <br>";
                   }
        }

        if ($res!=1) {
            echo "Production is $res <br>";
        }




