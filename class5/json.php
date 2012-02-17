<?php
$twitterFeed = "http://api.twitter.com/1/statuses/user_timeline.json?screen_name=jimbojsb";
$twitterJson = file_get_contents($twitterFeed);
var_dump($twitterJson);

$twitterObjects = json_decode($twitterJson);
//var_dump($twitterObj);

foreach ($twitterObjects as $obj) {
    echo '<div style="border: 1px solid black; margin-bottom: 10px;">';
    echo $obj->text;
    echo '</div>';
}

//$myObj->name = "Josh";
//$myObj->color = "red";
//
//echo json_encode($myObj);
//
//$myObj = json_decode('{"foo": "Bar"}');
//var_dump($myObj);


