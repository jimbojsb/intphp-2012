<?php
class MyClass
{
    public static function sortStuff($one, $two)
    {
        if ($one->name > $two->name) {
            return 1;
        } else if ($one->name < $two->name) {
            return -1;
        }
        return 0;
    }

    public function usortObjects($one, $two)
    {
        if ($one->name > $two->name) {
            return 1;
        } else if ($one->name < $two->name) {
            return -1;
        }
        return 0;
    }
}

$extramessage = "josh";

$myClosure = function($message) use ($extramessage) {
    echo $message . " " . $extramessage;
};

$myClosure("hello");


$a->name = "josh";
$b->name = "butts";
$names = array($a, $b);

usort($names, function($one, $two) {
    if ($one->name > $two->name) {
        return 1;
    } else if ($one->name < $two->name) {
        return -1;
    }
    return 0;
});

usort($names, array("MyClass", "sortStuff"));

$c = new MyClass();
usort($names, array($c, "usortObjects"));

is_callable($myClosure);