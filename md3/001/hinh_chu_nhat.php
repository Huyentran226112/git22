<?php
 class Rectangle{
  // thuoc tinh 
   public $width;
   public $height;
  // phuong thuc khoi tao gia tri thiet lap thuoc tinh 
  public function __construct($width,$height){
        $this->width = $width;
        $this->height = $height;
  }
  //  tra ve gia tri thuoc tinh set 
  // tinh dien tich 
    public function getArea():int
  {
    return $this->width * $this->height;
  }
  //  tinh chu vi 
   public function getPerimeter():int
   {
    return (($this->width + $this->height)*2);
   }

   public function display():string 
   {
    return "hinh_chu_nhat{" . "width=" . $this->width . ", height=" . $this->height . "}";
   }
 }

// khoi tao doi tuong
 $rectangle = new Rectangle (2,2);
//  goi phuong thuc thiet lap gia tri thuoc tinh getArea
 echo $rectangle->getArea();
 echo '<br>';
//  goi phuong thuc thiet lap gia tri thuoc tinh getPerimeter
 echo $rectangle->getPerimeter();
 echo '<br>';
//  goi phuong thuc thiet lap gia tri thuoc tinh display 
 echo $rectangle->display();



   
?>