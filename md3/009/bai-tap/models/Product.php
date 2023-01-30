<?php 
include_once 'models/Model.php';
class Product extends Model{

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `products`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
        // var_dump($items);
        // die();
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `products` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $title = $data['title'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $description = $data['description'];
        $sql = "INSERT INTO `products` ( `title`, `price`, `quantity`,`description`) VALUES ('$title', '$price', '$quantity','$description')";
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $title = $data['title'];
        $price = $data['price'];
        $quantity = $data['quantity'];
        $description = $data['description'];
        $sql = "UPDATE `products` SET
        `title` = '$title',
        `price` = '$price',
         `quantity` = '$quantity',
         `description` = '$description'
          WHERE `products`.`id` = $id";
          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM products WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}