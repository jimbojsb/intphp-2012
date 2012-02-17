<?php
namespace Bookmarks;
class Image extends Bookmark
{
    public function __toString()
    {
        return '<img height="100" width="100" src="' . $this->data . '"/>';
    }
}