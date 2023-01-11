<?php
class StopWatch{
    public $startTime;
    public $endTime ;
// phuong thuc khoi tao gia tri thiet lap thuoc tinh 
  public function __construct(){
    $this->startTime = microtime(true);
   
}
// tra ve gia tri thuoc tinh 
  public function start(){
    $this->startTime = microtime(true);
  } 
  public function  stop(){
    $this->endTime = microtime(true);
  }
//   phuong thuc 
  public function getElapsedTime(){
    return $this->endTime -$this->startTime;
  }
//   phuong thuc 
public function getstartTime (){
    return $this->startTime;
  }
  public function getendTime (){
    return $this->endTime;
  }
}
// khoi tao doi tuong 
$stopWatch = new StopWatch();
// goi phuong thuc 
$stopWatch->start();
for( $i=0;$i<100000;$i++){
}
$stopWatch->stop();
// in gia tri 
echo "thoi gian da troi qua " .$stopWatch->getElapsedTime()."s";
?>

