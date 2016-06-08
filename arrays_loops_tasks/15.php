<?php
$arr=array(4, 2, 5, 19, 13, 0, 10);
echo 'First variation:'.count($arr).'<br>';
$i=0;
foreach ($arr as $value){
    $i++;
}
echo 'Second variation:'. $i;