<?php
namespace Bookmarks;
spl_autoload_register(function($classname) {
    if (strpos($classname, __NAMESPACE__) !== false) {
        $classPath = str_replace(__NAMESPACE__ . '\\', DIRECTORY_SEPARATOR, $classname);
        $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $classPath);
        require_once __DIR__ . $classPath . ".php";
    }
});