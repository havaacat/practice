<?php

require_once __DIR__ . '/Sort/BubbleSort.php';
require_once __DIR__ . '/Sort/SelectSort.php';
require_once __DIR__ . '/Sort/StraightInsertionSort.php';

use Sort\BubbleSort;
use Sort\SelectSort;
use Sort\StraightInsertionSort;

$arr = array(9, 1, 5, 8, 3, 7, 4, 6, 2);

#$bubbleSort = new BubbleSort($arr);
#$bubbleSort->bubble0();
#$bubbleSort->bubble1();
#$bubbleSort->bubble2();
#$select = new SelectSort($arr);
#$select->simpleSelectSort();
$insert = new StraightInsertionSort($arr);
$insert->insertSort();
