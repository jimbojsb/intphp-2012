<?php
class Aquarium
{
    protected $data = array();

    public function __call($name, $args)
    {
        var_dump($name);
        var_dump($args);
    }

    public function __get($property)
    {
        return $this->data[$property];
    }

    public function __set($property, $value)
    {
        $this->data[$property] = $value;
    }

    public function fill()
    {
        //echo "fill";
    }
}

$a = new Aquarium();
$a->fill(10, 2, 4, 5);

$a->elephant = 1;
var_dump($a);
var_dump($a->elephant);
