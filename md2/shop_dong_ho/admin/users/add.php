<?php include_once '../db.php'; ?>
<?php
// Lay toan bo the loai
$sql = "SELECT * FROM `users`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$users= $stmt->fetchAll();
$error = [];
if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();

    // Gan vao bien
    // $MASACH = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $address = $_REQUEST['address'];
    $start_date = $_REQUEST['start_date'];
    $phone = $_REQUEST['phone'];
    $email = $_REQUEST['email'];
    $password = $_REQUEST['password'];
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $image = '';
    
    // nếu người dùng uploat file và file ko bị lỗi
    if (isset($_FILES['image']) && !$_FILES['image']['error'])
    {
        move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['name']);
        $image = '/public/uploads/'.$_FILES['image']['name'];
    }
    // xac thuc du lieu
    if($name == ""){
        $error['name'] = 'Bạn chưa nhập tên';
    }
    if($address == ""){
        $error['address'] = 'Bạn chưa nhập địa chỉ';
    }
    if($start_date == ""){
        $error['start_date'] = 'Bạn chưa nhập ngày làm việc';
    }
    if($phone == ""){
        $error['phone'] = 'Bạn chưa nhập số điện thoại';
    }
    if($email == ""){
        $error['email'] = 'Bạn chưa nhập  email';
    }
    if($password == ""){
        $error['password'] = 'Bạn chưa nhập mật khẩu ';
    }
    if($image == ""){
        $error['image'] = 'Bạn chưa nhập ảnh';
    }
    

    // Viet cau truy van
    if ( count($error) == 0 ){
        $sql = "INSERT INTO users(
            `name`,
            `address`,
            `start_date`,
            `phone`,
            `email`,
            `password`,
            `image`
        )
        VALUES (
            '$name',
            '$address',
            '$start_date',
            $phone,
            '$email',
            '$hashed_password',
            '$image'
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
<h3>Thêm nhân viên  </h3>
<div class="container-fluid px-4">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label" >TÊN NHÂN VIÊN: </label>
            <input class="form-control" type="text" name="name">
            <div class="text-danger"> <?php echo isset($error['name']) ? $error['name'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" > ĐỊA CHỈ: </label>
            <input class="form-control" type="text" name="address">
            <div class="text-danger"> <?php echo isset($error['address']) ? $error['address'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" > NGÀY LÀM VIỆC:</label>
            <input class="form-control" type="date" name="start_date">
            <div class="text-danger"> <?php echo isset($error['start_date']) ? $error['start_date'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" >ĐIỆN THOẠI :</label>
            <input class="form-control" type="number" name="phone">
            <div class="text-danger"> <?php echo isset($error['phone']) ? $error['phone'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" >EMAIL : </label>
            <input class="form-control" type="email" name="email">
            <div class="text-danger"> <?php echo isset($error['email']) ? $error['email'] : ''; ?> </div>
        </div>
        <div class="mb-3">
            <label class="form-label" >MẬT KHẨU:  </label>
            <input class="form-control" type="password" name="password">
            <div class="text-danger"> <?php echo isset($error['password']) ? $error['password'] : ''; ?> </div>
        </div>
        IMGAE: 
        <input type="file" name="image" value="<?= $row['image'];?>"> <br>
    <br>
        <input class="btn btn-primary" type="submit" value="Thêm">
        <a class="btn btn-primary" href="list.php"> Quay lại </a>
    </form>

</div>
<?php include_once '../footer.php'; ?>