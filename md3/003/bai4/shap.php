<?php
include_once ('Triangle.php');

class Shape extends Triangle{
    // thuoc tinh 
    public $height;
    public function __construct( $side1,$side2,$side3,$height){
        parent::__construct($side1,$side2,$side3);
        $this->height=$height;
    }
    public function getArea(){
        return 'Diện tích của tam giác là :'.($this->side1 * $this->height)/2;
    }
}
// khoi tao doi tuong
$shape = new Shape(2,3,2,3);
$triangle = new Triangle(2,3,3);

echo '<pre>';       
echo $shape->getArea(); 
echo '</pre>';          
echo '<pre>';
echo $triangle->toString();
echo '</pre>';
   