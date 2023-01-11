<?php
class Person{
    // thuoc tinh
    public $name;

    // phuong thuc thiet lap gia tri 
    function setName($Newname){
        $this->name = $Newname;
    }
    //phuong thuc tra ve gia tri
    function getName(){
        return $this->name;
    }
}
//  khoi tao doi tuong 
$person = new Person();
// thiet lap gia tri thuoc tinh
$person->setName('huyen tran');
// goi phuong thuc
//  $person->setName();
//  truy xuat thuoc tinh
 echo $person->getName();



