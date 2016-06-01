<?php
$a=20;
$b=0;
$c=-20;
echo "<pre>".'a = '.$a.PHP_EOL. 'b = '.$b.PHP_EOL. 'c = '.$c.PHP_EOL."</pre>";
echo "<pre>".'Приведение к булевому типу: если число "0", то false. Во всех остальных случаях "true"'. PHP_EOL."</pre>";
echo "<pre>".$a.' = '."</pre>";
var_dump(boolval($a));
echo "<pre>".$b.' = '."</pre>";
var_dump(boolval($b));
echo "<pre>".$c.' = '."</pre>";
var_dump(boolval($c));