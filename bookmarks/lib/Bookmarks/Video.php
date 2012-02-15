<?php
namespace Bookmarks;
class Video extends Bookmark
{
    public function __toString()
    {
        return $this->data;
    }
}