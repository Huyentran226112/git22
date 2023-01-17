<?php 
class Queue{
    public $container;
    public function __construct(){
    $this->container = [];
    }
    //phuong thuc enqueue day mot phan tu  
public function enqueue($item){
    array_push($this->container,$item);
}
// dequeue lay tra phan tu dau mang
public function dequeue(){
    return array_shift($this->container);
}
// tra ve do dai cua mang
public function size(){
    return count($this->container); 
}
// kiem tra co rong hay khong 
public function isEmpty(){
    return empty($this->container);
}
}