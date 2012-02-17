<?php
$myArray = array(1,2,3);
//print_r($myArray);
//print_r(unserialize(serialize($myArray)));

$myObj->foo = 'bar';
$myObj->name = 'josh';

echo serialize($myObj);
