<?php
class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
    public function _initAutoloading()
    {
        $a = Zend_Loader_Autoloader::getInstance();
        $a->registerNamespace('Bookmarks_');
    }

    public function _initRoutes()
    {
        $router = Zend_Controller_Front::getInstance()->getRouter();
        $router->addRoute(
            'bookmark_route',
            new Zend_Controller_Router_Route(
                '/bookmarks/:id',
                array(
                    'controller' => 'bookmarks',
                    'action'     => 'number'
                )
            )
        );
        $router->addRoute(
                    'bookmark_type_route',
                    new Zend_Controller_Router_Route(
                        '/bookmarks/type/:type',
                        array(
                            'controller' => 'bookmarks',
                            'action'     => 'bytype'
                        )
                    )
                );
    }
}

