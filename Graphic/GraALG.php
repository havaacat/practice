<?php

namespace Graphic;

class GraALG {
    const INFINITY = 65535;
    const CONNECT  = 1;
    public $verex;
    public $edges;
    public $graphic;
    //dijkstr用来记录最短路径和前置节点
    public $dijkstra;
    public $adjMatrix;
    public function __construct($verex, $edges, $graphic) {
        $this->verex = $verex;
        $this->edges = $edges;
        $this->graphic = $graphic;
    }
    
    //深度优先
    public function DFS($tail) {
        //do sth, not only echo
        echo $tail;
        foreach ($this->graphic[$tail] as $heads) {
            foreach ($heads as $head) {
                if ($this->verex[$head] == 0) {
                    self::DFS($head);
                }    
            }
        }
    }

    //深度优先,depth_first_search
    public function DFSTraverse() {
        foreach ($this->verex as $ver) {
            if ($ver->visited == 0) {
                $this->DFS($ver->name);
            }
        }
    }

    //广度优先,breadth_first_searth
    //array_pop取出最后一个值,array_shift取出第一个值,array_push
    public function BFSTraverse() {
        $queue = array();
        $queue [] = $this->verex['A']->name;
        $this->verex[$vex]->visited = 1;
        while(!empty($queue)) {
            $vex = array_shift($queue);            

            //do sth
            $this->verex[$vex]->visited = 1;
            echo $vex;

            $heads = $this->graphic[$vex];
            foreach ($heads as $head) {
                if ($this->verex[$head]->visited == 0) {
                    $this->verex[$head]->visited = 1;
                    array_push($queue, $head);
                }
            }                
        }     
    }

    //邻接表转换成邻接矩阵
    public function toAdjMatrix() {
        $this->adjMatrix = array();
        foreach ($this->verex as $vex_i) {
            $arr = array();
            foreach ($this->verex as $vex_j) {
                $edge_key = $vex_i->name . $vex_j->name;
                if (!empty($this->edges[$edge_key])) {
                    $arr [] = $this->edges[$edge_key]->weight;                    
                } else {
                    $arr [] = self::INFINITY;
                }
            }
            $this->adjMatrix [] = $arr;
        }        
    }
    //最短路径的问题
    public function shortestPathDijkstrai() {
           
    }
}
