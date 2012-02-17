<?php
$xml = "http://www.offers.com/admin/rss/offertype/o/deals/";

$myRss = simplexml_load_file($xml);

foreach ($myRss->channel->item as $item) {
    echo '<div style="border: 1px solid black; margin-bottom: 10px;">';
    echo $item->title;
    var_dump($item->title);
    echo '</div>';
}
