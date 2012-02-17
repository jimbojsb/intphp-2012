<?php
namespace Bookmarks;
class BookmarkMapper
{
    const TYPE_LINK = 1;
    const TYPE_IMAGE = 2;
    const TYPE_VIDEO = 3;

    public static function getByType($type)
    {

    }

    public static function getAll()
    {
        $sql = "SELECT type, data
                FROM bookmarks";
        $bookmarkRows = Db::query($sql);

        $bookmarks = array();

        foreach ($bookmarkRows as $row) {
            switch ($row["type"]) {
                case self::TYPE_LINK:
                    $link = new Link();
                    $link->setData($row["data"]);
                    $bookmarks[] = $link;
                    break;
                case self::TYPE_IMAGE:
                    $image = new Image();
                    $image->setData($row["data"]);
                    $bookmarks[] = $image;
                    break;
                case self::TYPE_VIDEO:
                    $video = new Video();
                    $video->setData($row["data"]);
                    $bookmarks[] = $video;
                    break;
            }
        }
        return $bookmarks;
    }
}