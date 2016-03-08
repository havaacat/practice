<?php

namespace Sort;

class SelectSort {
    public $array;

    public function __construct($array) 
    {
        $this->array = $array;
    }

    public function simpleSelectSort()
    {
        $length = count($this->array);
        self::printArray($this->array);
        echo PHP_EOL;
        for ($i = 0; $i < $length; $i++) {
            $min = $i;
            for ($j = $i; $j < $length; $j++) {
                if ($this->array[$j] < $this->array[$min]) {
                    $min = $j;
                }
            }
            if ($min != $i) {
                $this->swap($i, $min);             
            }
        } 
        self::printArray($this->array);
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
