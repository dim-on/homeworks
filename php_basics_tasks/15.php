<?php
$a=40;
$b=0;
$operator='/';
    if ($b==0&&$operator=='/') {
        echo 'Error';
        return;
    } else {
        switch ($operator) {
            case '+':
                $c = $a + $b;
                break;
            case '-';
                $c = $a - $b;
                break;
            case '*';
                $c = $a * $b;
                break;
            case '/';
                $c = $a / $b;
                break;
            case '%';
                $c = $a % $b;
                break;
        }
    }
echo $c;
