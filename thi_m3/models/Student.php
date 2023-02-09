<?php 
include_once 'models/Model.php';
class Student extends Model{

    public function all(){
        // Viet cau sql
        $sql = "SELECT * FROM `student`";
        $stmt= $this->conn->query($sql);
        $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
        $items = $stmt->fetchAll();
        return $items;
        // var_dump($items);
        // die();
    }
    public function find($id){
          //lay du lieu theo ID
          $sql = "SELECT * FROM `student` WHERE id = $id";
          //Debug sql
          // var_dump($sql);
          $stmt = $this->conn->query($sql);
          $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
          //Lấy về dữ liệu duy nhat
          $row = $stmt->fetch();
          return $row;
    }
    public function save($data){
        $ten_hoc_sinh = $data['ten_hoc_sinh'];
        $lop = $data['lop'];
        $ngay_sinh = $data['ngay_sinh'];
        $gioi_tinh = $data['gioi_tinh'];
        $thong_tin_hoc_sinh = $data['thong_tin_hoc_sinh'];
        $sql = "INSERT INTO `student` ( `ten_hoc_sinh`, `lop`, `ngay_sinh`,`gioi_tinh`,`thong_tin_hoc_sinh`) VALUES ('$ten_hoc_sinh', '$lop', '$ngay_sinh','$gioi_tinh','$thong_tin_hoc_sinh')";
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
    public function update($id,$data){
        $ten_hoc_sinh = $data['ten_hoc_sinh'];
        $lop = $data['lop'];
        $ngay_sinh = $data['ngay_sinh'];
        $gioi_tinh = $data['gioi_tinh'];
        $thong_tin_hoc_sinh = $data['thong_tin_hoc_sinh'];
        $sql = "UPDATE `student` SET
        `ten_hoc_sinh` = '$ten_hoc_sinh',
        `lop` = '$lop',
         `ngay_sinh` = '$ngay_sinh',
         `gioi_tinh` = '$gioi_tinh',
         `thong_tin_hoc_sinh` = '$thong_tin_hoc_sinh'
          WHERE `student`.`id` = $id";
          // thuc hien truy van
          $this->conn->exec($sql);
    }
    public function delete($id){
        $sql = "DELETE FROM student WHERE id = $id";
        // Debug sql
        // var_dump($sql);
        //Thuc hien truy van
        $this->conn->exec($sql);
    }
}