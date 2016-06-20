<?php
$a=40;
$b=0;
$c='';
$operator='/';
    if ($b==0) {
        switch ($operator) {
            case ('/'):
                echo 'It is impossible to divide by 0!';
                break;
            case ('%'):
                echo 'It is impossible to divide by 0!';
                break;
        }
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
