<?php
class MyQueue {
    private $elements = [];
    private $limit;

    public function __construct($limit){
        $this->limit = $limit;
    }

    // them phan tu vao hang doi
    public function enqueue($item){
        array_push($this->elements,$item);
    }
    // xoas phan tu tu hang doi
    public function dequeue(){
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
}