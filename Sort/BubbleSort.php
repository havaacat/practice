<?php

namespace Sort;

class BubbleSort extends Sort{
    //冒泡排序初级版,
    public function bubble0()
    {
        $length = count($this->array);
        for ($i = 0; $i < $length; $i++) {
            for ($j = $i + 1; $j < $length; $j++) {
                if ($this->array[$i] > $this->array[$j]) {
                    $this->swap($i, $j);
                }
            }
            echo "i=$i :";
            Sort::printArray($this->array);
        }
    }

    public function bubble1()
    {
        $length = count($this->array);
        for ($i = 0; $i < $length; $i++) {
            for ($j = $length -1; $j > $i; $j--) {
                if ($this->array[$j-1] > $this->array[$j]) {
                    $this->swap($j-1, $j);
                }
            }
            echo "i=$i :";
            Sort::printArray($this->array);
        }
    }
    
    public function bubble2()
    {
        $length = count($this->array);
        $flag = true;
        for ($i = 0; $i < $length && $flag; $i++) {
            $flag = false;
            for ($j = $length -1; $j > $i; $j--) {
                if ($this->array[$j-1] > $this->array[$j]) {
                    $this->swap($j-1, $j);
                    $flag = true;
                }
            }
            echo "i=$i, flag = $flag :";
            Sort::printArray($this->array);
        }
    }
}

