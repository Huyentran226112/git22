<?php include_once '../db.php'; ?>
<?php
// Lay toan bo the loai
$sql = "SELECT * FROM `categories`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$categories = $stmt->fetchAll();

if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();

    // Gan vao bien
      // $MASACH = $_REQUEST['id'];
      $THELOAISACH = $_REQUEST['category_id'];
      $TENSACH = $_REQUEST['name'];
      $GIA = $_REQUEST['price'];
      $description = $_REQUEST['description'];

    // Viet cau truy van
    $sql = "INSERT INTO books(`category_id`,`name`,`price`,`description`)
    VALUES ($THELOAISACH,'$TENSACH',$GIA,'$description')";
    
    
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
    <form action="" method="post">

        TÊN SÁCH: <input type="text" name="name"> <br>
        GIÁ SÁCH: <input type="text" name="price"> <br>
       LOẠI SÁCH: <select name="category_id" class="form-control">
            <?php foreach( $categories as $category ): ?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach; ?>
        </select> <br>
        MÔ TẢ: <input type="text" name="description"> <br>
        <input type="submit" value="thêm">
    </form>
</div>
<?php include_once '../footer.php'; ?>
