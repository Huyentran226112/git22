<?php
class ArrayList {
    public array $container;
    public int $limit;
    public function __construct($limit){
        $this->container = [];
        $this->limit = $limit;
    }
    // them phan tu vao danh sach
    public function add($item){
        if(!$this->isFull()){
            array_push($this->container, $item);
        }else {
            echo "Danh sách đã đầy";
        }
    }
    // xoa mot phan tu 
    public function remove($index){
        if(array_key_exists($index,$this->container)){
            unset($this->container[$index]);
        }else{
            echo "Không tồn tại phần tử tại vị trí " . $index;
        }
    }
    // cap nhat phan tu trong danh sach
    public function update($index,$item){
        if(array_key_exists($index,$this->container)){
            $this->container[$index] = $item;
        }else{
            echo "Không tồn tại phần tử tại vị trí " . $index;
        }
    }
    // tra ve do dai cua danh sach
    public function size(){
        return count($this->container);
    }
    // kiem tra danh sach cos day hay ko 
    public function isFull(){
        return $this->size() == $this->limit;
    }
    // lay phan tu tai vi tri chi muc
    public function getByIndex($index){
        if(array_key_exists($index,$this->container)){
            return $this->container[$index];
        }else{
            echo "Không tồn tại phần tử tại vị trí " . $index;
        }
    }
}
