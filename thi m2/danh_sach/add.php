<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM `the_loai`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$the_loai = $stmt->fetchAll();

if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();
  // Gan vao bien
      // $MASACH = $_REQUEST['id'];
      $TENHOCSINH = $_REQUEST['ten'];
      $LOP = $_REQUEST['lop'];
      $NGAYSINH = $_REQUEST['ngay_sinh'];
      $GIOITINH = $_REQUEST['gioi_tinh_id'];
      $THONGTIN= $_REQUEST['thong_tin_hoc_sinh'];
      // xac thuc du lieu
    if($TENHOCSINH == ""){
        $error['ten'] = 'Bạn chưa nhập tên';
    }
    if($LOP == ""){
        $error['lop'] = 'Bạn chưa nhập lớp';
    }
    if($NGAYSINH == ""){
        $error['ngay_sinh'] = 'Bạn chưa nhập ngày sinh  ';
    }
    if($GIOITINH == ""){
        $error['gioi_tinh_id'] = 'Bạn chưa nhập giới tính   ';
    }
    if($THONGTIN == ""){
        $error['thong_tin_hoc_sinh'] = 'Bạn chưa nhập thông tin';
    }

    // Viet cau truy van
    $sql = "INSERT INTO the_loai(`ten`,`lop`,`ngay_sinh`,`gioi_tinh_id`,`thong_tin_hoc_sinh`)
    VALUES ('$TENHOCSINH','$LOP','$NGAYSINH','$GIOITINH','$THONGTIN')";
    
    
    // // Debug sql
    // echo($sql);
    // die();
    
    //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
}
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label" >TÊN HỌC SINH : </label>
            <input class="form-control" type="text" name="ten">
            <div class="text-danger"> <?php echo isset($error['ten']) ? $error['ten'] : ''; ?> </div>
        </div>
    <div class="mb-3">
            <label class="form-label" >LỚP : </label>
            <input class="form-control" type="text" name="lop">
            <div class="text-danger"> <?php echo isset($error['lop']) ? $error['lop'] : ''; ?> </div>
        </div>
    <div class="mb-3">
            <label class="form-label" >   NGÀY SINH : </label>
            <input class="form-control" type="date" name="ngay_sinh">
            <div class="text-danger"> <?php echo isset($error['ngay_sinh']) ? $error['ngay_sinh'] :''; ?> </div>
        </div> 
       <div class="mb-3">
            <label class="form-label" > GIỚI TÍNH: </label>
            <input class="form-control" type="text" name="gioi_tinh_id">
            <div class="text-danger"> <?php echo isset($error['gioi_tinh_id']) ? $error['gioi_tinh_id'] :''; ?> </div>
        </div> 
       
    <div class="mb-3">
            <label class="form-label" >   THÔNG TIN : </label>
            <input class="form-control" type="text" name="thong_tin_hoc_sinh">
            <div class="text-danger"> <?php echo isset($error['thong_tin_hoc_sinh']) ? $error['thong_tin_hoc_sinh'] : ''; ?> </div>
    </div>
    

    <br>
        <input class="btn btn-primary" type="submit" value="Thêm">
        <a class="btn btn-primary"   href="list.php"> Quay lại </a>
    </form>

</div>
<?php include_once '../footer.php'; ?>