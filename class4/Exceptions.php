<?php

class MyException extends Exception
{

}

class YourException extends Exception
{

}

class MyClass
{
    public function sayHello()
    {
        throw new MyException("Sorry, I'm anti-social");
    }
}

$c = new MyClass();


try {
    $c->sayHello();
} catch (MyException $e) {
    echo $e->getMessage();
}


