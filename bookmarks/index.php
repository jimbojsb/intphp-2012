<?php
require_once 'lib/autoload.php';

$l = new Bookmarks\Link();
$l->setData('http://www.offers.com/');
$l->setCreatedAt('2012-02-09');

$v = new Bookmarks\Video();
$v->setCreatedAt('2012-02-09');
$v->setData('<iframe width="560" height="315" src="http://www.youtube.com/embed/fljKx9nvrL4" frameborder="0" allowfullscreen></iframe>');

$i = new Bookmarks\Image();
$i->setCreatedAt('2012-02-09');
$i->setData('http://i.imgur.com/iE4mS.jpg');

?>

<html>
    <body>
        <div>
            <h1>Video</h1>
            <?=$v?>
        </div>
        <div>
            <h1>Image</h1>
            <?=$i?>
        </div>
        <div>
            <h1>Text</h1>
            <?=$l?>
        </div>
    </body>
</html>