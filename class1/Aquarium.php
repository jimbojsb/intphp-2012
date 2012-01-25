<?php
class Aquarium
{
    public static $shapes = array('round', 'square');

    public $waterType;
    public $size;
    public $shape;
    public $fishCount = 0;
    public $waterLevel = 0;

    public function  __construct($size, $shape)
    {
        $this->size = $size;

        if (in_array($shape, self::$shapes)) {
            $this->shape = $shape;
        } else {
            echo "oh no, something bad";
        }
    }

    public function __toString()
    {
        $output = "Size: $this->size; Water Level: $this->waterLevel";
        return $output;
    }

    public function fill($numGallons = 0)
    {
        $this->waterLevel += $numGallons;
        if ($this->waterLevel > $this->size) {
            $this->waterLevel = $this->size;
        }
    }

    public function drain($numGallons = null)
    {
        if ($numGallons !== null) {
            $this->waterLevel -= $numGallons;
            if ($this->waterLevel < 0) {
                $this->waterLevel = 0;
            }
        } else {
            $this->waterLevel = 0;
        }
    }



}