<?php
class BookmarksController extends Zend_Controller_Action
{
    public function bytypeAction()
    {
        $i = new Bookmarks_Link();
        $i->setData('http://www.offers.com');

        $this->view->myLink = $i;
    }
}