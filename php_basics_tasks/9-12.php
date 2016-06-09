<?php
$day=10;
    switch ($day) {
        case ($day >= 1 && $day <= 5):
            echo 'It&#39s a working Day!';
            break;
        case ($day >= 6 && $day <= 7):
            echo 'It&#39s a Holiday!';
            break;
        default:
            echo 'Undefined Day!';
            //break;
    }