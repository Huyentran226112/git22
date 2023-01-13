<?php 
class Point2D {
    // thuoc tinh
    public float $x;
    public float $y;
// phuong thuc 
public function __construct(float $x,float $y){
     $this->x = $x;
     $this->y = $y;
}

public function getX():float{
   return $this->x;
}
public function getY():float{
   return $this->y;
}
public function setY($ts_y){
    $this->y = $ts_y;
}
public function setXY($ts_xy){
    $this->x*$this->y = $ts_xy;
}
public function getXY(){
    return [$this->x*$this->y];
}
public function tostring(){
    echo  ' '.$this->x . ' '.$this->y;
}
}
