<?php
$url = 'http://www.offers.com/test/?foo=bar&test=value';
$urlParts = @parse_url($url);
parse_str($urlParts["query"], $queryParts);

$queryString = http_build_query(array("foo" => "bar", "test" => "value"));
var_dump($queryString);
