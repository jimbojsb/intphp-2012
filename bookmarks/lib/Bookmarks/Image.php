<?php
namespace Bookmarks;
class Image extends Bookmark
{
    public function __toString()
    {
        return '<img src="' . $this->data . '"/';
    }
}