<?php
//   thông tin người dùng
class Person{
    public $name;
    public $age;
    public $address;
public function __construct($name,$age,$address){
    $this->name = $name;
    $this->age = $age;
    $this->address = $address;
}    
}
class Model {
    public function listPerson()
      {  
        return[
            0 => new Person(  " nguyen van A ", "23","quang tri"),
            1 => new Person(  " nguyen van B ", "26", "quang binh"),
            2 => new Person(  "nguyen van C", "25","hue"),
        ];
    }
}
