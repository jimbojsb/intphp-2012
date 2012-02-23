<?php
namespace Bookmarks;
class BookmarkMapper
{
    const TYPE_LINK = 1;
    const TYPE_IMAGE = 2;
    const TYPE_VIDEO = 3;

    public static function getByType($type)
    {
        $sql = "SELECT data, type
                FROM bookmarks
                WHERE type = ?";
        $results  = Db::query($sql, $type);
        return self::processResult($results);
    }

    public static function getAll()
    {
        $sql = "SELECT type, data
                FROM bookmarks";
        $bookmarkRows = Db::query($sql);
        return self::processResult($bookmarkRows);

    }

    protected static function processResult($rows)
    {
        $bookmarks = array();

        foreach ($rows as $row) {
            if (!$row["type"]) {
                throw new \Exception("Unable to instantiate bookmark without type data");
            }

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