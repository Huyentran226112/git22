<?php
CONST SLOW = 1;
CONST MEDIUM = 2;
CONST FAST = 3;
class Fan {
 public $speed = SLOW;
 public $on = false;
 public $radius = 5;
 public $color = "blue";
 // Phuong thuc khoi tao dung de thiet lap cac gia tri thuoc tinh
 public function __construct() {
 }
 // Trả về giá trị thuộc tính
 public function getSpeed() {
     return $this->speed;
 }
 public function getOn(){
     return $this->on;
 }
 public function getRadius(){
     return $this->radius;
 }
 public function getColor(){
     return $this->color;
 }
 //Thiết lập thuộc tính
 public function setSpeed($speed){
     $this->speed = $speed;
 }
 public function setOn($on){
     $this->on = $on;
 }
 public function setRadius($radius){
     $this->radius = $radius;
 }
 public function setColor($color){
     $this->color = $color;
 }
 // Trả về chuỗi chứa thông tin quạt
  public function toString(){
      if($this->on == true){
          return $this->speed . ' ' . $this->color . ' ' . $this->radius . " fan is on";
      }else{
          return $this->color . ' ' . $this->radius . " fan is off";
      }
  }
}
$fan1 = new Fan();
$fan1->setSpeed(FAST);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setOn(true);
echo $fan1->toString();
echo '<br>';
$fan2 = new Fan();
$fan2->setSpeed(MEDIUM);
$fan2->setRadius(5);
$fan2->setColor("blue");
$fan2->setOn(false);
echo $fan2->toString();




