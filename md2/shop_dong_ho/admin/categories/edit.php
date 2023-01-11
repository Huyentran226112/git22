<?php include_once '../db.php'; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `categories` WHERE id = $id";
    //debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 

    // Lay ve du lieu duy nhat
    $row = $stmt->fetch();
    // echo '<pre>';
    // print_r($row);
    // die();

    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == "POST" ){
        // in du lieu nguoi dung gui len
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();

        // Gan vao bien
       
        $name = $_REQUEST['name'];
       
        // Viet cau truy van
        $sql = "UPDATE categories SET
                name = '$name'
                WHERE id = $id
        ";
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
<h3>Chỉnh sửa <h3>
<div class="container-fluid px-4">
<form action="" method="post">
    Tên thể loại : <input type="text" name="name" value="<?= $row['name'];?>"> <br>
     <input class="btn btn-primary" type="submit" value="Thêm">
    <a class="btn btn-primary"   href="list.php"> Quay lại </a>
</form>
</div>
<?php include_once '../footer.php'; ?>