<?php
include_once 'Animail.php';
class Cat extends Animail {
    public function __construct($ts_name){
        echo '<br>'.__METHOD__;
        $this->name = $ts_name;
    }
    public function say($noi_dung,$name = "") {
        echo '<br>'.__METHOD__;
        // // Tai su dung phuong thuc lop cha
        // parent::say($noi_dung);
        // // if($name){
        // //     echo $name;
        // // }else{
        // //     echo $this->name;
        // // }
        // echo '<br> Cat: ' . $noi_dung;
    }
    public function __destruct(){
        echo '<br>'.__METHOD__;
        $this->name = '';
    }
}
// Khoi tao doi tuong
$Cat = new Cat('Miu Le');//__construct
// $cat->setName('miumiu');
// Goi phuong thuc
// $cat->say('meomeo','miule');//say
//__destruct
//  private: riêng 
// protertech kế thừa sử dung được 
