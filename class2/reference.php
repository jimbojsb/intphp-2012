<?php
$fruitArray = array("apple" => "red", "grape" => "purple");

$fruitObj = new stdClass();
$fruitObj->apple = "red";
$fruitObj->grape = "purple";


function changeColor($fruit, $color, $thing) {
    if (is_object($thing)) {
        $thing->$fruit = $color;
    } else if (is_array($thing)) {
        $thing[$fruit] = $color;
    }
}

changeColor('apple', 'blue', $fruitArray);
var_dump($fruitArray);
changeColor('apple', 'blue', $fruitObj);
var_dump($fruitObj);