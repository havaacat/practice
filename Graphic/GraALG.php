<?php

namespace Graphic;

class GraALG {
   
    const INFINITY = 65535;
    const CONNECT  = 1;
   
    public $verex;
    public $edges;
    //邻接表
    public $graphic;
    //邻接矩阵表示
    public $adjMatrix;
    //Floyd最短路径算法
    public $depth;
    public $path;

    public function __construct($verex, $edges, $graphic)
    {
        $this->verex = $verex;
        $this->edges = $edges;
        $this->graphic = $graphic;
    }
    
    //深度优先
    public function DFS($tail)
    {
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
    public function DFSTraverse()
    {
        foreach ($this->verex as $ver) {
            if ($ver->visited == 0) {
                $this->DFS($ver->name);
            }
        }
    }

    //广度优先,breadth_first_searth
    //array_pop取出最后一个值,array_shift取出第一个值,array_push
    public function BFSTraverse()
    {
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
    public function toAdjMatrix()
    {
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
    
    //最短路径问题,Dijkstra算法,邻接矩阵表示$adjMatrix;
    public function shortestPathDijkstra($source)
    {
        foreach($this->verex as $vex) {
            $vex->visited  = 0;
            $vex->pre      = 0;
            $vex->shortest = $this->adjMatrix[$source][$vex->name];
        }
        $this->verex[$source]->visited = 1;
        $this->verex[$source]->shortest = 0;
        foreach ($this->verex as $verer) {
            $min = self::INFINITY;
            $key = 0;
            foreach ($this->verex as $vex) {
                if ($vex->visited == 0 && $vex->shortest < $min) {
                    $min = $vex->shortest;
                    $key = $vex->name;                    
                    echo $min.'--'.$key, PHP_EOL;
                }
            }
            echo $key,PHP_EOL;
            $this->verex[$key]->visited = 1;
            foreach ($this->verex as $vex) {
                if ($vex->visited == 0 &&
                        $vex->shortest > $min + $this->adjMatrix[$key][$vex->name]) {
                    $vex->pre = $key;
                    $vex->shortest = $min + $this->adjMatrix[$key][$vex->name];
                }
            }
        }
    }

    public function shortestFloyd()
    {
        //$this->depth;
        //$this->path;        
        $length = count($this->verex);
        for ($i=0; $i < $length; $i++) {
            
        }
    }
}
