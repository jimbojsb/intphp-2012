<?php
//scandir
//directoryiterator

var_dump(scandir(__DIR__));

$d = new DirectoryIterator(__DIR__);
foreach ($d as $item) {
    echo $item->getPathname() . '<br>'  ;
}