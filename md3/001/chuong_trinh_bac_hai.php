<?php
class QuadraticEquation{
    public $a;
    public $b;
    public $c;
    // phuong thuc khoi tao gia tri thiet lap thuoc tinh
    public function __construct($a, $b, $c){
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;  
    } 
    // tra ve gia tri thuoc tinh 
    public function getA(){
        return $this->a;
    }
    public function getB(){
        return $this->b;
    }
    public function getC(){
        return $this->c;
    }
    public function  getDiscriminant(){
        return  $this->getB() * 2 - 4 * $this->getA()* $this->getC();
    }
    public function getRoot(){
         if( $this->getDiscriminant()> 0 ){
            echo (-$this->getB()+ sqrt($this->getDiscriminant()))/2*$this->getA()." VÀ ". 
             (-$this->getB()- sqrt($this->getDiscriminant()))/2*$this->getA();
         }else if( $this->getDiscriminant() ==0){
            echo -$this->getB()/ 2*$this->getA();
         }else {
            echo "phương trình vô nghiệm";
         }
    }
}
// khoi tao doi tuong 
$quadraticEquation = new QuadraticEquation (2,10,2);
// goi phuong thuc thiet lap gia tri 
echo $quadraticEquation->getA();
echo '<br>';
echo $quadraticEquation->getB();
echo '<br>';
echo $quadraticEquation->getC();
echo '<br>';
    
// goi phuong thuc thiet lap gia tri getDiscriminant 
echo $quadraticEquation->getDiscriminant();
echo '<br>';
// goi phuong thuc thiet lap gia tri  getroot
echo $quadraticEquation->getRoot();


