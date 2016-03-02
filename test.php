<?php

require_once __DIR__.'/Graphic/Vertex.php';
#require_once __DIR__.'/Graphic/Edge.php';

use Graphic\Vertex;
use Graphic\Edge;

$begin_int = ord('A');
$vertexex = array();
//定义结点,初始化A-E的节点，节点上数据为i
for ($i = 0; $i < 9; $i++) {
    $vertexex [] = new Vertex(chr($begin_int + $i));       
}
print_r($vertexex);
//定义边

//初始化邻接矩阵
