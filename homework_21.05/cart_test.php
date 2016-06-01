<?php
print_r($_REQUEST);
$ar = $_REQUEST;
//echo array_multisort($_REQUEST);
//print_r($a);


 foreach ($_REQUEST as $key=>$value) {
   echo $value;
 }