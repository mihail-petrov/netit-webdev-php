<?php

class Bishop {
    
    private $color; 
    private $score;
    
    public function __construct($color) {
        
        $this->color = $color;
        $this->score = 5;
    }
    
    public function render() {
        return "<div class='{$this->color}'>B</div>";
    }
}