<?php

namespace Graphic;

class Edge {
    
    public $vex_head;
    
    public $vex_tail;
    
    public $weight;

    public function __construct($vex_head, $vex_tail, $weight) {
        $this->vex_head = $vex_head;
        $this->vex_tail = $vex_tail;
        $this->weight    = $weight;
    }
} 
