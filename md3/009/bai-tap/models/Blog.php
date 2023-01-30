<?php 
include_once 'models/Model.php';
class Blog extends Model{

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `blogs`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
        // var_dump($items);
        // die();
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `blogs` WHERE id = $id";
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
        $description = $data['description'];
        $sql = "INSERT INTO `blogs` ( `title`,`description`) VALUES ('$title','$description')";
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $title = $data['title'];
        $description = $data['description'];
        $sql = "UPDATE `blogs` SET
        `title` = '$title',
         `description` = '$description'
          WHERE `blogs`.`id` = $id";
          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM blogs WHERE id = $id";
        //Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}