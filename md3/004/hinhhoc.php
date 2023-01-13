<?php 
abstract class HinhHoc{
    public $chieudai;
    public $chieurong;
    public abstract function Chuvi();
    public abstract function Dientich();
    public function Xemthongtin(){
        echo '<br>' . __METHOD__;
    }
}
abstract class HinhHoc1 extends HinhHoc{
}
interface Kichthuoc{
    public function Thunho();
    public function Phongto();
}
class HinhVuong extends HinhHoc implements Kichthuoc{
    public  function Chuvi(){
        echo '<br>' . __METHOD__;
    }
    public function Dientich(){
        echo '<br>' . __METHOD__;
    }
    public function Thunho(){
        echo '<br>' . __METHOD__;
    }
    public function Phongto(){
        echo '<br>' . __METHOD__;
    }
}
$hinhvuong = new HinhVuong();
$hinhvuong->Chuvi();
$hinhvuong->Dientich();
$hinhvuong->Xemthongtin();
$hinhvuong->Thunho();
$hinhvuong->Phongto();