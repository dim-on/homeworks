<?php
for ($i=0;$i<=20;$i++) {
    $arr[$i]=rand(0,100);
}

echo "<pre>";
print_r($arr);
echo "</pre>";

$minValue=min($arr);
$maxValue=max($arr);

echo "Minimal value is $minValue <br>";
echo "Maximal value is $maxValue <br>";

list($minValue,$maxValue)=array($maxValue, $minValue);

echo 'After exchange: <br>';
echo "Minimal value is $minValue <br>";
echo "Maximal value is $maxValue <br>";