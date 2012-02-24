<?php
class Bookmarks_Video extends Bookmarks_Bookmark
{
    public function __toString()
    {
        return $this->data;
    }
}