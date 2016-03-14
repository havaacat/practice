<?php

require_once __DIR__ . '/Sort/Sort.php';
require_once __DIR__ . '/Sort/BubbleSort.php';
require_once __DIR__ . '/Sort/SelectSort.php';
require_once __DIR__ . '/Sort/StraightInsertionSort.php';
require_once __DIR__ . '/Sort/ShellSort.php';

use Sort\Sort;
use Sort\BubbleSort;
use Sort\SelectSort;
use Sort\StraightInsertionSort;
use Sort\ShellSort;

$arr = array(9, 1, 5, 8, 3, 7, 4, 6, 2);

#$bubbleSort = new BubbleSort($arr);
#$bubbleSort->bubble0();
#$bubbleSort->bubble1();
#$bubbleSort->bubble2();
#$obj = new SelectSort($arr);
#$obj = new StraightInsertionSort($arr);
$obj = new ShellSort($arr);
$obj->sort();
