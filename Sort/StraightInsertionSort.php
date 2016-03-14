<?php

namespace Sort;

class StraightInsertionSort extends Sort 
{
    public function Sort()
    {
        $length = count($this->array);
        Sort::printArray($this->array);
        for ($i = 1;$i < $length; $i++) {
            if ($this->array[$i - 1] > $this->array[$i]) {
                $tmp = $this->array[$i];
                for ($j = $i - 1; $this->array[$j] > $tmp && $j >= 0; $j--) {
                    $this->array[$j+1] = $this->array[$j];
                }
                $this->array[$j + 1] = $tmp;
                Sort::printArray($this->array);
            }
        }
    }
}
