<?php
  
class Circle {
            public $radius;
            public $color;
            public $area;
        public function __construct($radius,$color,$area){
            $this->radius = $radius;
            $this->color = $color; 
            $this->area = $area; 
        }
        public function setRadius($radius){
            $this->radius = $radius;
        }
        public function getRadius(){
            return $this->radius;   
        }
        public function setColor($color){
            $this->color= $color;
        }
        public function getColor(){
            return $this->color;   
        }
        public function setArea($area){
            $this->area= $area;
        }
        public function getArea(){
            return $this->area;   
        }
        public function setDt($dt){
            $this->dt= $dt;
        }
        public function getDt(){
            return ' Diện tích hình tròn :'.pi()*pow($this->radius,2);   
        }
        } 
    // }