<?php
require_once 'model/human.php';
require_once 'model/citizen.php';
require_once 'model/student_.php';
require_once 'model/parent_.php';
require_once 'model/child_.php';


$parent1 = new parent_();
$parent2 = new parent_();
$child1 = new child_();
//$persona->printHuman('caucasian');
//$persona ->printCitizen('ukrainian', 'male', '56');
//$persona->printStudent(2016, 2021);
$parent1->printParent('married', 'Alex');
$parent2->printParent('married', 'Jane');
$child1->printChild('Max');

echo 'Children quantity: ' . child_::getChildQuantity() . '<br>';
echo 'Parents quantity: ' . parent_::getParQuantity() . '<br>';