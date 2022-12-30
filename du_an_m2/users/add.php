<?php include_once '../db.php'; ?>
<?php
// Lay toan bo the loai
$sql = "SELECT * FROM `users`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$users= $stmt->fetchAll();
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
    $image = '';
    // nếu người dùng uploat file và file ko bị lỗi
    if (isset($_FILES['image']) && !$_FILES['image']['error'])
    {
        move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['name']);
        $image = '/public/uploads/'.$_FILES['image']['name'];
    }

    // Viet cau truy van
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
        '$password',
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
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
    <form action="" method="post" enctype="multipart/form-data">

        TÊN NHÂN VIÊN: 
        <input class="form-control" type="text" name="name"> <br>
        ĐỊA CHỈ: 
        <input class="form-control" type="text" name="address"> <br>
        NGÀY LÀM VIỆC:
            <input class="form-control" type="date" name="start_date"> <br>
        ĐIỆN THOẠI : 
        <input class="form-control" type="text" name="phone"> <br>
        EMAIL : 
        <input class="form-control" type="email" name="email"> <br>
        MẬT KHẨU: 
        <input class="form-control" type="text" name="password"> <br>
        IMGAE: 
        <input type="file" name="image" value="<?= $row['image'];?>"> <br>
    <br>
        <input class="btn btn-primary" type="submit" value="Thêm">
        <a class="btn btn-primary" href="list.php"> Quay lại </a>
    </form>

</div>
<?php include_once '../footer.php'; ?>