<?php include_once '../db.php'; ?>
<?php
$id = $_GET['id'];
$sql = "SELECT * FROM `students` WHERE id = $id";
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
        $sql = "UPDATE students SET
                name = '$TEN',
                class = '$LOP',
                address = '$DIACHI',
                email = '$EMAIL',
                img = '$IMG'
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
<div class="container-fluid px-4">
<form action="" method="post" enctype ="multipart/form-data">
    TÊN: <input type="text" name="name" value="<?= $row['name'];?>"> <br>
    LỚP: <input type="text" name="class" value="<?= $row['class'];?>"> <br>
    ĐỊA CHỈ: <input type="text" name="address" value="<?= $row['address'];?>"> <br>
    EMAIL: <input type="text" name="email" value="<?= $row['email'];?>"> <br>
    IMG: <input type="file" name="img" value="<?= $row['img'];?>"> <br>
    <input type="submit" value="thêm">
</form>
</div>
<?php include_once '../footer.php'; ?>

