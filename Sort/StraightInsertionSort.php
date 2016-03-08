<?php

namespace Sort;

class StraightInsertionSort 
{
    public $array;

    public function __construct($array) 
    {
        $this->array = $array;
    }

    public function insertSort()
    {
        $length = count($this->array);
        for ($i = 1; $i < $length; $i++) {
            $tmp = $this->array[$i];
            for ($j = $i - 1;$this->array[$j] > $tmp; $j--) {
                $this->array[$j+1] = $this->array[$j];
            }
            $this->array[$j] = $tmp;
            self::printArray($this->array);
        }
    }

    public static function printArray($array) 
    {
        foreach ($array as $value) {
            echo sprintf("%4d",$value);
        }
        echo PHP_EOL;
    }
}
