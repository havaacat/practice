<?php

namespace Sort;

class SelectSort extends Sort{
    public function Sort()
    {
        $length = count($this->array);
        Sort::printArray($this->array);
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
        Sort::printArray($this->array);
    }
}
