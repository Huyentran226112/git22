<?php

class Shape{
    // thuoc tinh
    public string $name;
    // phuong thuc 
    public function __construct(string $name){
                $this->name = $name;
    }
    public function show():string{ 
        return " I am a shape. My name is $this->name";
    }
    
}