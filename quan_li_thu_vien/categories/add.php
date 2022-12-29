<?php include_once '../db.php'; ?>
<?php
   
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == "POST" ){
        // in du lieu nguoi dung gui len
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $TENSACH = $_REQUEST['name'];
        

        // Gan vao bien
        $name = $_REQUEST['name'];
      
        // Viet cau truy van
        $sql = "INSERT INTO categories(name)
        VALUES ('$name')";
        // Debug sql
        // var_dump($sql);
        // die();
        
        //Thuc hien truy van
        $conn->exec($sql);

        // chuyen huong ve trang danh sach
        header("Location: list.php");
    } 
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<h3>Thêm mới thể loại</h3>
<form action="" method="post">
TÊN : <input type="text" name="name"> <br>
  <input type="submit" value="THÊM">
</form>
