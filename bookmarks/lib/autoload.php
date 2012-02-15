<?php
namespace Bookmarks;
spl_autoload_register(function($classname) {
    if (strpos($classname, __NAMESPACE__) !== false) {
        $classPath = str_replace('\\', DIRECTORY_SEPARATOR, $classname);
        require_once __DIR__ . DIRECTORY_SEPARATOR . $classPath . ".php";
    }
});