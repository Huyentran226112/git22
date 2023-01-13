<?php
 class Animail{
    // thuoc tinh 
    protected $name ;
    private $color ;
// phuong thuc 
public function say($ts_nd){
     echo 'Animail:' .$ts_nd;
}
public function getName(){
    return $this->name;
}
public function getColor(){
    return $this->color;
}
public function setName($ts_name){
    $this->name=$ts_name;
}
public function setColor($ts_Color){
    $this->Color=$ts_Color;
}
}
// // khoi tao doi tuong 
// $animail1 = new Animail();
// //thiet lap cac gia tri  thuoc tinh 
// $animail1->setName('animail1');
// //thiet lap cac gia tri  thuoc tinh 
// $animail1->setColor('red');
// // truy xuat thuoc tinh name
// echo '<br>' .$animail1->getName();
// echo '<br>' .$animail1->getColor();
// // in doi thuong 
// echo '<pre>';
// print_r($animail1);
// echo '</pre>';