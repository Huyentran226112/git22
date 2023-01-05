<?php include_once '../db.php'; ?>
<?php
$id = $_GET['id'];
    $sql = "SELECT * FROM `users` WHERE id = $id";
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
        $name= $_REQUEST['name'];
        $address  = $_REQUEST['address'];
        $start_date = $_REQUEST['start_date'];
        $phone = $_REQUEST['phone'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        // nếu người dùng uploat file và file ko bị lỗi
        $image = '';
        if (isset($_FILES['image']) && !$_FILES['image']['error'])
        {
            move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['name']);
            $image = '/public/uploads/'.$_FILES['image']['name'];
        }
      

        // Viet cau truy van
        $sql = "UPDATE users SET
                name = '$name',
                address = '$address',
                start_date = '$start_date',
                phone = '$phone',
                email = '$email',
                password = '$hashed_password',
                image = '$image'
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
<h3>CHỈNH SỬA </h3>
<form action="" method="post" enctype ="multipart/form-data">
    TÊN NHÂN VIÊN: 
    <input class="form-control" type="text" name="name" value="<?= $row['name'];?>"> <br>
    ĐỊA CHỈ:
      <input class="form-control" type="text" name="address" value="<?= $row['address'];?>"> <br>
    NGÀY LÀM VIỆC:
    <input class="form-control" type="date" name="start_date" value="<?= $row['start_date'];?>"> <br>
    ĐIỆN THOẠI :
    <input class="form-control" type="text" name="phone" value="<?= $row['phone'];?>"> <br>
   EMAIL:
    <input class="form-control" type="email" name="email" value="<?= $row['email'];?>"> <br>
    MẬT KHẨU: 
    <input class="form-control" type="password" name="password" value="<?= $row['password'];?>"> <br>
    ẢNH: 
    <input type="file" name="image" value="<?= $row['image'];?>"> <br>
    <br>
    <input class="btn btn-primary" type="submit" value="Thêm">
    <a class="btn btn-primary"   href="list.php"> Quay lại </a>
</form>
</div>
<?php include_once '../footer.php'; ?>