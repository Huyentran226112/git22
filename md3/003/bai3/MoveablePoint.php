<?php
include_once ('Point.php');
class MoveablePoint extends Point{
    public float $xSpeed;
    public float $ySpeed;
public function __construct(float $x, float $y,float $xSpeed,float $ySpeed){
    Parent::__construct($x,$y);
    $this->xSpeed = $xSpeed;
    $this->ySpeed = $ySpeed;
}
public function getXSpeed(){
    return $this->xSpeed;
}
public function getYSpeed(){
    return $this->ySpeed;
}
public function setXSpeed($ts_xSpeed){
     $this->xSpeed = $ts_xSpeed;
}
public function setYSpeed($ts_ySpeed){
    $this->ySpeed = $ts_ySpeed;
}
public function getSpeed():array{
    return [$this->xSpeed*$this->ySpeed];
}
public function move(){
    return $this->xSpeed;
}
public function toString(){
    echo  'đây là point';
}
}
$moveablePoint = new MoveablePoint(2,5,4,8);
echo '<pre>';
print_r($moveablePoint->getSpeed());
echo '</pre>';

