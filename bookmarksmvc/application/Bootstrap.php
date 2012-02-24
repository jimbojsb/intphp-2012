<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initAutoloading()
    {
        $a = Zend_Loader_Autoloader::getInstance();
        $a->registerNamespace('Bookmarks_');
    }

}

