<?php
class MyList {
    // khai bao thuoc tinh
    public $size;
    public array $elements = [];
    // phuong thuc 
    public function __construct($size){
        $this->size = $size;
    }
    // them du lieu
    public function insert($index,$obj){
       $this->elements[$index] = $obj;
    }
    // them phan tu vao mang
        public function add($obj){
            if( $this->isFull() ){
                echo 'Danh sach da day';
            }else{
                array_push($this->elements,$obj);
            }
        }
    
    //xoa phan tu tai vi tri
    public function remove($index){
        if( isset( $this->elements[$index] ) ){
           return array_splice($this->elements,$index,1);
        }else{
            echo 'Chi so ko ton tai';
        }
    }
    // lay ve mot phan tu
    public function get($index){
        return $this->elements[$index];
    }
    // lam rỗng mang
    public function clear(){
        $this->elements = [];
    }
    // chen phan tu vao mang dua vao vi tri
    public function addAll($array){
       $this->elements = array_merge($this->elements,$array);
    }
    // tim kiem mot phan tu trong mang
    public function indexOf($obj){
        if (!$this->isEmpty()) {
            return array_search($$obj, $this->elements);
        } else {
            return -1;
        }
    }
    // kiem tra gia tri rong
    public function isEmpty(){
        if (empty($this->elements)) {      
                        return true;
                    } else {
                        return false;
                    }
    }
    // sap xep cac phan tu tu thap den cao 
    public function sort(){
      if(!$this->isEmpty()){
         sort($this->elements);
      }else{
        echo "mang trong";
      }
    }
    //đặt lại con trỏ nội bộ của mảng về phần tử đầu tiên
    public function reset(){
        reset($this->elements);
    }
    //tra ve do dai cua danh sach
    public function size(){
        return count($this->elements);

    }
    //  kiem tra danh sach co day hay khong
    public function isFull(){
        if($this->size() == $this->size){
            return true;
        }
        return false;
    }

    }
 // khoi tao doi tuong
$myList = new MyList(6);
// Goi phuong thuc add 
$myList->add('xin chao');
$myList->add('ban khoe khong');
$myList->add('vui nhi');
$myList->add('tam biet');

//goi phuong thuc insert 
// echo $myList->insert(5,'khong vui');

// goi phuong thuc remove 
// echo $myList->remove(2);

// goi phuong thuc addAll
// $myList->addAll(['no luon']);

// goi phương thuc indexOf
//  echo $myList->indexOf('tam biet');
// echo '<pre>';
// print_r ($myList->indexOf('tam biet'));
// echo '<pre>';

// goi phương thuc sort
// $myList->sort();


// in doi tuong addAll 
// echo '<pre>';
// print_r ($myList);
// echo '<pre>';

// in doi tuong reset
// echo '<pre>';
// print_r ($myList->reset());
// echo '<pre>';

// in doi tuong isEmpty
// echo '<pre>';
// print_r($myList->isEmpty());
// echo '<pre>';

// in doi tuong remove
// echo '<pre>';
// print_r ($myList->remove(2));
// echo '<pre>';


