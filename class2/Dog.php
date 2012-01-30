<?php
class Dog
{
    public function bark()
    {
        echo "woof";
    }
}

class Terrier extends Dog
{
    public function dig()
    {
        // dig something
    }

    public function bark()
    {
        echo "Yip";
    }
}

$myDog = new Terrier();
$myDog->bark();