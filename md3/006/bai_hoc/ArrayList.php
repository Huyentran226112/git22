<?php
// Lop chua du lieu
class ArrayList {
    // Thuoc tinh luu tru du lieu
    public array $elements = [];
    public $limit;
    public function __construct($limit){
        $this->limit = $limit;
    }
    // them phan tu vao mang (danh sach)
    public function add($item){
        if( $this->isFull() ){
            echo 'Danh sach da day';
        }else{
            array_push($this->elements,$item);
        }
    }
    // chen phan tu vao mang dua vao vi tri
    public function addAtPos($item,$index){
        array_splice($this->elements,$index,0,$item);
    }
    //xoa phan tu tai vi tri
    public function removeByIndex($index){
        // unset($this->elements[$index]);
        // array_key_exists: kiem tra chi so co ton tai trong mang hay khong
        // isset():
        if( isset( $this->elements[$index] ) ){
            array_splice($this->elements,$index,1);
        }else{
            echo 'Chi so ko ton tai';
        }
    }
    //cap nhat phan tu trong danh sach
    public function update($index,$value){
       $this->elements[$index] = $value;
    }
    //tra ve do dai cua danh sach
    public function size(){
        return count($this->elements);
    }
    // kiem tra danh sach co day hay khong
    public function isFull(){
        if($this->size() == $this->limit){
            return true;
        }
        return false;
    }
    // lay phan tu tai vi tri
    public function getByIndex($index){
        return $this->elements[$index];
    }
}
// Khoi tao doi tuong: thiet lap danh sach gioi han (limit: 4)
$arrayList = new ArrayList(4);
// Goi phuong thuc add 3 lan ( Huyen,Phong,Nho )
$arrayList->add('huyen');
$arrayList->add('phong');
$arrayList->add('nho');
$arrayList->add('tam');
$arrayList->add('Ngoc');
// Them Tam vao vi tri 2
$arrayList->addAtPos('Tam',2);
// Xoa Tam ra khoi danh sach
$arrayList->removeByIndex(2);
// Cap nhat Nho thanh Siu
$arrayList->update(2,"siu");
// Xem danh sach co bao nhieu phan tu
echo 'Do dai danh sach' . $arrayList->size();
// Kiem tra xem danh sach da day chua
var_dump($arrayList->isFull());
// Lay phan tu tai vi tri 1
echo $arrayList->getByIndex(1);
// In doi tuong ra
echo '<pre>';
print_r($arrayList);
echo '</pre>';