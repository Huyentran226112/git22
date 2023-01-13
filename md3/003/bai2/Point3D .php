<?php
include_once ('Point2D.php');
class Point3D extends Point2D{
    public float $z;
public function __construct($x,$y,$z){
    Parent::__construct($x,$y);
    $this->z = $z;

}

// khai bao z
public function getZ(){
    return $this->z;
}
public function setZ($z){
     $this->z = $z;
}
public function setXYZ($ts_xyz){
    $this->x*$this->y*$this->z=$ts_xyz;
   }
public function getXYZ(){
    return [$this->x*$this->y*$this->z];
   }
public function toString() {
    echo 'đây là lớp 3D';
}
}
$objPoint2D = new  Point2D (5,8);
print_r($objPoint2D->getXY()) ;
echo '<br>';
$objPoint3D = new  Point3D (5,8,9);
print_r($objPoint3D->getXYZ()) ;