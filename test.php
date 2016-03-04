<?php

require_once __DIR__.'/Graphic/Vertex.php';
require_once __DIR__.'/Graphic/Edge.php';
require_once __DIR__.'/Graphic/GraALG.php';

use Graphic\Vertex;
use Graphic\Edge;
use Graphic\GraALG;

for ($i = 0; $i < 9; $i++) {
    $verex [$i] = new Vertex($i);  
}
//定义边
$edge_arr = array('011', '025',
    '101', '123', '137', '145',
    '205', '213', '241', '257',
    '317', '342', '363',
    '415', '421', '432', '453', '466', '479',
    '527', '543', '575',
    '633', '646', '672', '687',
    '749', '755', '762', '784',
    '867', '874'  
);
$edges = array();
foreach ($edge_arr as $edge) {
    $tail   = substr($edge, 0, 1);
    $head   = substr($edge, 1, 1);
    $weight = intval(substr($edge, 2, 1));
    $edges[$tail.$head] = new Edge($head, $tail, $weight);
}
//定义图
$graphic_arr = array();
foreach ($verex as $ver) {
    $row = array();
    foreach ($edges as $edge) {
        if ($ver->name == $edge->head) {
            $row[] = $edge->tail;
        }
    }
    $graphic_arr [$ver->name] = $row;
}
$graphic = new GraALG($verex, $edges, $graphic_arr);
#$graphic->DFSTraverse();
#$graphic->BFSTraverse();
$graphic->toAdjMatrix();
$graphic->shortestPathDijkstra(0);
print_r($graphic->verex);
