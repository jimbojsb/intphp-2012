<?php
$myArray = array(
    "foo"  => "bar",
    "test" => "value"
);

extract($myArray);

$foo = 'bar';
$test = 'value';
var_dump(compact('foo', 'test'));