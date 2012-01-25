<?php
require_once 'Aquarium.php';
$myAquarium = new Aquarium(10, 'square');
$myAquarium->fill(5);

$myAquarium->fill(50);

$myAquarium->drain(2);

$myAquarium->waterLevel = -100;

Aquarium::$shapes[] = 'triangle';
var_dump(Aquarium::$shapes);

echo $myAquarium;