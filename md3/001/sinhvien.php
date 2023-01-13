<?php
class SinhVien{
    // Thuoc tinh
    public $name = '';
    public $email = '';
    // Phuong thuc
    public function work (){
        echo '<br>' .__METHOD__;
    }
    public function relax (){
        echo '<br>' .__METHOD__;
    }
}
// Khoi tao doi tuong
    $SinhVien1 = new SinhVien();
// Thiet lap gia tri thuoc tinh
    $SinhVien1->name = "nguyen van A";
    $SinhVien1->email = "nguyenvanA@gmail.com";
// Goi phuong thuc
    $SinhVien1->work();
    $SinhVien1->relax();
// Truy xuat thuoc tinh
    echo '<br>';
    echo $SinhVien1->name;
    echo '<br>';
    echo $SinhVien1->email;
    echo '<pre>';
    print_r($SinhVien1);
    echo '</pre>';
     