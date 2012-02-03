<?php
namespace Myproject;
spl_autoload_register(function($classname) {
    if (stripos($classname, __NAMESPACE__) !== false) {
        $classPath = str_replace(__NAMESPACE__ . '\\', '/', $classname);
        require_once __DIR__ . $classPath . ".php";
    }
});