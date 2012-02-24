<?php
class Bookmarks_Image extends Bookmarks_Bookmark
{
    public function __toString()
    {
        return '<img height="100" width="100" src="' . $this->data . '"/>';
    }
}