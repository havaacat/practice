<?php

namespace Sort;

class Sort {
    public $array;

    public function __construct($array) 
    {
        $this->array = $array;
    }

    public function Sort()
    {
    }
    
    public function swap($i, $j) 
    {
        $value = $this->array[$i];
        $this->array[$i] = $this->array[$j];
        $this->array[$j] = $value;
    }
    
    public static function printArray($array) 
    {
        foreach ($array as $value) {
            echo sprintf("%4d",$value);
        }
        echo PHP_EOL;
    }
}
