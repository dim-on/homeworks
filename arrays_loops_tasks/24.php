<?php
$number=212369856;
$check=6;
$counterOfEntries=0;
if (is_numeric($number)) {
    $number=(string)$number;
    $arr=str_split($number);
        foreach ($arr as $item) {
            if ($item==$check) {
                $counterOfEntries++;
            }
        }
    echo "Number of entries = $counterOfEntries";
} else {
    echo 'Impossible to check the value because of invalid variable type!';
}