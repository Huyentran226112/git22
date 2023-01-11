<?php include_once '../db.php'; ?>
<?php
$id = $_GET['id'];
    $sql = "SELECT * FROM `orders` WHERE id = $id";
    //debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $row = $stmt->fetch();
    // Lay ve du lieu duy nhat
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
        $order_date= $_REQUEST['order_date'];
        $total  = $_REQUEST['total'];
        $cutstomer_name = $_REQUEST['cutstomer_name'];
        $cutstomer_phone = $_REQUEST['cutstomer_phone'];
        $cutstomer_address = $_REQUEST['cutstomer_address'];
        // Viet cau truy van
        $sql = "UPDATE orders SET
                order_date = '$order_date',
                total = '$total',
                cutstomer_name = '$cutstomer_name',
                cutstomer_phone = '$cutstomer_phone',
                cutstomer_address = '$cutstomer_address'
               
        ";

        // Debug sql
        // echo($sql);
        // die();
        
        //Thuc hien truy van
        $conn->exec($sql);

        // chuyen huong ve trang danh sach
        header("Location: list.php");
    } 
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<h3>CHỈNH SỬA </h3>
<form action="" method="post" enctype ="multipart/form-data">
    NGÀY ĐẶT HÀNG: 
    <input class="form-control" type="date" name="order_date" value="<?= $row['order_date'];?>"> <br>
    TỔNG TIỀN:
      <input class="form-control" type="number" name="total" value="<?= $row['total'];?>"> <br>
    TÊN KHÁCH HÀNG:
    <input class="form-control" type="text" name="cutstomer_name" value="<?= $row['cutstomer_name'];?>"> <br>
    ĐIỆN THOẠI :
    <input class="form-control" type="phone" name="cutstomer_phone" value="<?= $row['cutstomer_phone'];?>"> <br>
   ĐỊA CHỈ:
    <input class="form-control" type="text" name="cutstomer_address" value="<?= $row['cutstomer_address'];?>"> <br>
    <input class="btn btn-primary" type="submit" value="Thêm">
    <a class="btn btn-primary"  href="list.php"> Quay lại </a>
</form>
</div>
<?php include_once '../footer.php'; ?>
        