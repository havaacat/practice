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
        self::printArray($this->array);
        for ($i = 1;$i < $length; $i++) {
            if ($this->array[$i - 1] > $this->array[$i]) {
                $tmp = $this->array[$i];
                for ($j = $i - 1; $this->array[$j] > $tmp && $j >= 0; $j--) {
                    $this->array[$j+1] = $this->array[$j];
                }
                $this->array[$j + 1] = $tmp;
                self::printArray($this->array);
            }
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
