<?php
$a=$b='xx';
    echo $a;
    echo "<br>";
    for ($i=1;$i<=4;$i++) {
        echo $a.=$b;
        echo "<br>";
    }