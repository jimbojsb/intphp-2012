<?php
class BookmarksController extends Zend_Controller_Action
{
    public function indexAction()
    {
        $this->view->headLink()->appendStylesheet('/styles.css');

        $bookmarks = Bookmarks_BookmarkMapper::getAll();
        $this->view->bookmarks = $bookmarks;
    }

    public function numberAction()
    {
        $id = $this->_getParam('id');
        $bookmark = Bookmarks_BookmarkMapper::get($id);
        if (!$bookmark) {
            throw new Exception('bookmark not found');
        }
        $this->view->bookmark = $bookmark;
        $this->view->pageTitle = strlen($bookmark->getData());
    }

    public function bytypeAction()
    {
        $this->_helper->viewRenderer->setScriptAction('index');
        $type = $this->_getParam('type');
        $bookmarks = Bookmarks_BookmarkMapper::getByType($type);
        if (!$bookmarks) {
            throw new Exception('type not found');
        }
        $this->view->bookmarks = $bookmarks;
        $this->view->pageTitle = "There are " . count($bookmarks) . " Bookmarks";
    }
}