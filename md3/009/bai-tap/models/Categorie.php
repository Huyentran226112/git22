<?php 
include_once 'models/Model.php';
class Categorie extends Model{

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `categories`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
        // var_dump($items);
        // die();
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `categories` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $name = $data['name'];
        $address = $data['address'];
        $sql = "INSERT INTO `categories` ( `name`,`address`) VALUES ('$name','$address')";
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $name = $data['name'];
        $address = $data['address'];
        $sql = "UPDATE `categories` SET
        `name` = '$name',
         `address` = '$address'
          WHERE `categories`.`id` = $id";
          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM categories WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}