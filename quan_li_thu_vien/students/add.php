<?php include_once '../db.php'; ?>
<?php
if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();

    // Gan vao bien
      // $MASACH = $_REQUEST['id'];
      $TEN = $_REQUEST['name'];
      $LOP = $_REQUEST['class'];
      $DIACHI = $_REQUEST['address'];
      $EMAIL = $_REQUEST['email'];
      $IMG = '';
      if (isset($_FILES['img']))
        {
            if (!$_FILES['img']['error'])
            {
                move_uploaded_file($_FILES['img']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['img']['name']);
                $IMG = '/public/uploads/'.$_FILES['img']['name'];
            }
        }
    
    // Viet cau truy van
    // $sql = "INSERT INTO students(`name`,`class`,`address`,`email`) VALUES ('$TEN','$LOP','$DIACHI','$EMAIL')";
    $sql = "INSERT INTO students(`name`,`class`,`address`,`email`,`img`)
    VALUES ( '$TEN','$LOP','$DIACHI','$EMAIL','$IMG')";
    // Debug sql
    // echo($sql);
    // die();
    
    //Thuc hien truy van
    $conn->exec($sql);

    // chuyen huong ve trang danh sach
    header("Location: list.php");
};
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
    <form action="" method="post" enctype ="multipart/form-data">
        TÊN : <input type="text" name="name"> <br>
        LỚP: <input type="text" name="class"> <br>
       ĐỊA CHỈ: <input type="text" name="address"> <br>
        EMAIL: <input type="text" name="email"> <br>
        IMG: <input type="file" name="img"> <br>
        <input type="submit" value="thêm">
    </form>
</div>
<?php include_once '../footer.php'; ?>

