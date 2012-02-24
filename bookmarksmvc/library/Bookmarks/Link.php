<?php
class Bookmarks_Link extends Bookmarks_Bookmark
{
    function __toString()
    {
        return '<a href="' . $this->data . '">' . $this->data . '</a>';
    }
}