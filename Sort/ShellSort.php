<?php

namespace Sort;

class ShellSort extends Sort
{
    public function sort()
    {
        $length = count($this->array);
        $step = $length;
        do {
            echo $step, PHP_EOL;
            Sort::printArray($this->array);
            $step = $step / 3;
            for ($i = $step; $i < 
        } while ($step > 0);
    }
}
