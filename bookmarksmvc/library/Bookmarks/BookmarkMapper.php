<?php
class Bookmarks_BookmarkMapper
{
    const TYPE_LINK = 1;
    const TYPE_IMAGE = 2;
    const TYPE_VIDEO = 3;

    public static function get($id)
    {
        $bookmarksTable = new Zend_Db_Table('bookmarks');
        $results = $bookmarksTable->find($id);
        $processedReults = self::processResult($results);
        return $processedReults[0];
    }

    public static function getByType($type)
    {
        $bookmarksTable = new Zend_Db_Table('bookmarks');
        $bookmarks = $bookmarksTable->fetchAll(
            $bookmarksTable->select()
                           ->where('type = ?', $type)
        );
        return self::processResult($bookmarks);
    }

    public static function getAll()
    {
        $bookmarksTable = new Zend_Db_Table('bookmarks');
        return self::processResult($bookmarksTable->fetchAll());

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
                    $link = new Bookmarks_Link();
                    $link->setData($row["data"]);
                    $bookmarks[] = $link;
                    break;
                case self::TYPE_IMAGE:
                    $image = new Bookmarks_Image();
                    $image->setData($row["data"]);
                    $bookmarks[] = $image;
                    break;
                case self::TYPE_VIDEO:
                    $video = new Bookmarks_Video();
                    $video->setData($row["data"]);
                    $bookmarks[] = $video;
                    break;
            }
        }
        return $bookmarks;
    }
}