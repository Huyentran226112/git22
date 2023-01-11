<?php
class Student{
    // thuoc tinh
    public $name = "";
    private $email = "";
    // phuong thuc
    private function work(){
        echo __METHOD__;
    }
    public function getEmail(){
        return $this->email;
    }
    public function setEmail($email){
        $this->email = $email;
    }
}
// khoi tao doi tuong
$student = new Student();
// thiet lap thuoc tinh name
$student->name = 'Nguyen van teo';
// thiet lap tthuoc tinh email
$student->setEmail('nguyenvanteo22@gmail.com');
// truy xuat thuoc tinh name
echo $student->name;
echo '<br>';
// truy xuat thuoc tinh email
echo $student->getEmail();
echo '<br>';
// in ra doi tuong
echo '<pre>';
print_r($student);
echo '</pre>';
