<?php
require_once 'lib/autoload.php';
Bookmarks\Db::init("localhost", "bookmarks", "bookmarks", "bookmarks");
$bookmarks = \Bookmarks\BookmarkMapper::getByType(\Bookmarks\BookmarkMapper::TYPE_VIDEO);
?>

<html>
    <body>
        <?foreach ($bookmarks as $bookmark) {?>
            <div>
                <?=$bookmark?>
            </div>
        <?}?>
    </body>
</html>