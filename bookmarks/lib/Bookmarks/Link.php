<?php
namespace Bookmarks;
class Link extends Bookmark
{
    function __toString()
    {
        return '<a href="' . $this->data . '">' . $this->data . '</a>';
    }
}