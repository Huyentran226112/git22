<?php

class Cylinder
{
    private $radius;
    private $height;
    public function __construct($radius, $height){
        $this->radius = $radius;
        $this->height = $height;
    }
    // tinh the tich
    public function getVolume()
    {
    // tinh dien tich
        // 
        $baseArea = $this->dien_tich();
        // tinh chu vi 
        $perimeter = $this->tinh_chu_vi();
        return $perimeter *$this->height + 2 * $baseArea;
    }
    // tinh dien tich
    public function dien_tich(){
        $baseArea = pi() *$this->radius * $this->radius;
        return $baseArea; 
    }
    // tinh chu vi 
    public function tinh_chu_vi(){
        $baseArea = 2*pi() *$this->radius;
        return $baseArea; 
    }

}

$objCylinder = new Cylinder(1,2);
echo $objCylinder->getVolume();