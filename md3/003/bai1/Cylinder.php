<?php
 class Cylinder extends Circle{
    public $height;
    public function volume(){
        return $this->area * $this->height;
    }
    public function setHeight($height){
        $this->height= $height;
    }
    public function getTt(){
        return ' Thể tích hình trụ :'. pi() * pow($this->radius,2) * $this->height;
    }
    }
  