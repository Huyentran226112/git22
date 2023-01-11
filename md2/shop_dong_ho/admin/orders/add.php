<?php include_once '../db.php'; ?>
<?php
// Lay toan bo the loai
$sql = "SELECT * FROM `orders`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$orders= $stmt->fetchAll();
$error = [];
if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();

    // Gan vao bien
    // $MASACH = $_REQUEST['id'];
    $order_date = $_REQUEST['order_date'];
    $total = $_REQUEST['total'];
    $cutstomer_name = $_REQUEST['cutstomer_name'];
    $cutstomer_phone = $_REQUEST['cutstomer_phone'];
    $cutstomer_address = $_REQUEST['cutstomer_address'];
    // xac thuc du lieu
    if($order_date == ""){
        $error['order_date'] = 'Bạn chưa nhập ngày';
    }
    if($total == ""){
        $error['total'] = 'Bạn chưa nhập tổng tiền';
    }
    if($cutstomer_name == ""){
        $error['cutstomer_name'] = 'Bạn chưa nhập tên ';
    }
    if($cutstomer_phone == ""){
        $error['cutstomer_phone'] = 'Bạn chưa nhập số điện thoại';
    }
    if($cutstomer_address == ""){
        $error['cutstomer_address'] = 'Bạn chưa nhập địa chỉ ';
    }
     // Viet cau truy van
     if ( count($error) == 0 ){
        $sql = "INSERT INTO orders(
            `order_date`,
            `total`,
            `cutstomer_name`,
            `cutstomer_phone`,
            `cutstomer_address`
        )
        VALUES (
            '$order_date',
            '$total',
            '$cutstomer_name',
            $cutstomer_phone,
            '$cutstomer_address'
        )";
       
        
        // // Debug sql
        // echo($sql);
        // die();
        
        //Thuc hien truy van
        $conn->exec($sql);
    
        // chuyen huong ve trang danh sach
        header("Location: list.php");
    }
  
} 
?>
<?php include_once '../header.php'; ?>
<h3>Thêm đơn hàng </h3>
<div class="container-fluid px-4">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label" >NGÀY ĐẶT HÀNG : </label>
            <input class="form-control" type="date" name="order_date">
            <div class="text-danger"> <?php echo isset($error['order_date']) ? $error['order_date'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" > TỔNG TIỀN: </label>
            <input class="form-control" type="number" name="total">
            <div class="text-danger"> <?php echo isset($error['total']) ? $error['total'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" > TÊN KHÁCH HÀNG:</label>
            <input class="form-control" type="text" name="cutstomer_name">
            <div class="text-danger"> <?php echo isset($error['cutstomer_name']) ? $error['cutstomer_name'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" >ĐIỆN THOẠI :</label>
            <input class="form-control" type="number" name="cutstomer_phone">
            <div class="text-danger"> <?php echo isset($error['cutstomer_phone']) ? $error['cutstomer_phone'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" >ĐỊA CHỈ : </label>
            <input class="form-control" type="text" name="cutstomer_address">
            <div class="text-danger"> <?php echo isset($error['cutstomer_address']) ? $error['cutstomer_address'] : ''; ?> </div>
        </div>
        <input class="btn btn-primary" type="submit" value="Thêm">
        <a class="btn btn-primary" href="list.php"> Quay lại </a>
    </form>

</div>
<?php include_once '../footer.php'; ?>
    