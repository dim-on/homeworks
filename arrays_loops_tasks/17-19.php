<?php
$month=date("F");
$day=date("l");
$months=array('January','February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December');
$days=array('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday');
    
    foreach ($months as $value) {
        if ($month==$value) {
            echo '<b>' .$month. '</b>'.'<br>';
        } else {
            echo $value.'<br>';
        }
    }

    echo '<br>';

    foreach ($days as $value) {
        if ($value=='Saturday' || $value=='Sunday') {
            echo '<b>' .$value. '</b>'.'<br>';
        } else {
            echo $value.'<br>';
        }
    }

    echo '<br>';

    foreach ($days as $value) {
        if ($day==$value) {
            echo '<i>' .$day. '</i>'.'<br>';
        } else {
            echo $value.'<br>';
        }
    }