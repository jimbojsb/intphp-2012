<?php
require_once 'lib/autoload.php';
Bookmarks\Db::init("localhost", "bookmarks", "bookmarks", "bookmarks");
$bookmarks = \Bookmarks\BookmarkMapper::getAll();
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