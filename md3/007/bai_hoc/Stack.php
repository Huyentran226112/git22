<?php
class MyStack {
    private $elements = [];
    private $limit;

    public function __construct($limit){
        $this->limit = $limit;
    }
    //dua phan tu vao danh sach
    public function push($item){
        array_unshift($this->elements,$item);
    }
    // lay phan tu ra khoi ngan xep
    public function pop(){
        return array_shift($this->elements);
    }
    // xem phan tu dau tien cua ngan xep
    public function peek(){
        return current($this->elements);
    }

    // kiem tra rong
    public function isEmpty(){
        if(count($this->elements) == 0){
            return true;
        }
        return false;
    }
    // xem danh sach co gi
    public function getStack(){
        return $this->elements;
    }
    // kiem tra day
    public function isFull(){
        if(count($this->elements) == $this->limit){
            return true;
        }
        return false;
    }
}
// KHoi tao doi tuong
$mystack = new MyStack(4);
// Them vao lan luot Huyen, Nho, Phong, Tam
$mystack->push("Huyen");
$mystack->push("Nho");
$mystack->push("Phong");
$mystack->push("Tam");
// Lay ra phan tu tren cung ma ko xoa
 echo $mystack->peek();
// Lay ra phan tu tren cung va xoa di
echo $mystack->pop();
// Xem danh sach co rong khong ?
var_dump($mystack->isEmpty());
// Xem danh sach co day khong
var_dump($mystack->isFull());
// Xem toan bo cac phan tu trong danh sach
echo "<pre>";
print_r($mystack->getStack());
echo "</pre>";
// In doi tuong
echo "<pre>";
print_r($mystack);
echo "</pre>";