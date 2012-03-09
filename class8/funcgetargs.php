<?php
function printNames()
{
    $args = func_get_args();
    foreach ($args as $name) {
        echo $name . '<br>';
    }
}

printNames('josh', 'joe', 'bob', 'will');