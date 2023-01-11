<?php
class Student{
    // thuoc tinh
    public $name="";
    private $email="";
    public static $class=" C10";
//  thiet lap phuong thuc 
private function work(){
    echo __METHOD__;
}
public static function getClass(){
    // echo __METHOD__;
    // in ra gia tri thuoc tinh class
     echo self::$class;
    //  in ra gia tri thuoc tinh email 
    // echo $this->name;
}

}
// khoi tao dôi tương
$student = new Student();
//  truy cap thuoc tinh class
//  echo Student::$class;
 echo '<br>';
// truy cap thuoc tinh getclass
 Student::getClass();