<?php include_once '../db.php'; ?>
<?php
$id = $_GET['id'];
    $sql = "SELECT * FROM `danh_sach` WHERE id = $id";
    //debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $row = $stmt->fetch();

    $sql = "SELECT * FROM `danh_sach`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $danh_sach = $stmt->fetchAll();
    if( $_SERVER['REQUEST_METHOD'] == "POST" ){
        // in du lieu nguoi dung gui len
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();

        // Gan vao bien
        $TENHOCSINH= $_REQUEST['ten'];
        $LOP  = $_REQUEST['lop'];
        $NGAYSINH = $_REQUEST['ngay_sinh'];
        $GIOITINH = $_REQUEST['gioi_tinh_id'];
        $THONGTIN = $_REQUEST['thong_tin_hoc_sinh'];
        // $GIOITINH = $_REQUEST['gioi_tinh_id'];
         // Viet cau truy van
         $sql = "UPDATE danh_sach SET
         ten = '$TENHOCSINH',
         lop = '$LOP',
         ngay_sinh = '$NGAYSINH',
         gioi_tinh_id = '$GIOITINH',
         thong_tin_hoc_sinh= '$THONGTIN',
         WHERE id = $id
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
<form action="" method="post" >
   TÊN HỌC SINH   : 
    <input class="form-control" type="text" name="ten" value="<?= $row['ten'];?>"> <br>
   LỚP:  
    <input class="form-control" type="text" name="lop"  value="<?= $row['lop'];?>"> <br>
    NGÀY SINH  :   
    <input class="form-control" type="date" name="ngay_sinh" value="<?= $row['ngay_sinh'];?>"> <br>
    GIỚI TÍNH : 
    <select name="gioi_tinh_id" class="form-control">
            <?php foreach( $the_loai as $category ): ?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['gioi_tinh_id'];?></option>
            <?php endforeach; ?>
        </select> <br>
   THÔNG TIN :  <input class="form-control" type="text" name="thong_tin_hoc_sinh"value="<?= $row['thong_tin_hoc_sinh'];?>"> <br>
    <br>
    <input class="btn btn-primary" type="submit" value="Thêm">
    <a class="btn btn-primary" href="list.php"> Quay lại </a>
</form>
</div>
<?php include_once '../footer.php'; ?>
      
