<?php include_once '../db.php'; ?>
<?php
// Lay toan bo the loai
$sql = "SELECT * FROM `categories`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$categories = $stmt->fetchAll();

$sql = "SELECT * FROM `products`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$products = $stmt->fetchAll();

if( $_SERVER['REQUEST_METHOD'] == "POST" ){
    // in du lieu nguoi dung gui len
    // echo '<pre>';
    // print_r( $_REQUEST );
    // die();

    // Gan vao bien
    // $MASACH = $_REQUEST['id'];
    $name = $_REQUEST['name'];
    $price = $_REQUEST['price'];
    $quantity = $_REQUEST['quantity'];
    $category_id = $_REQUEST['category_id'];
    $description = $_REQUEST['description'];
    $status = $_REQUEST['status'];
    $image = '';
    // nếu người dùng uploat file và file ko bị lỗi
    if (isset($_FILES['image']) && !$_FILES['image']['error'])
    {
        move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['name']);
        $image = '/public/uploads/'.$_FILES['image']['name'];
    }

    // Viet cau truy van
    $sql = "INSERT INTO products(
        `name`,
        `price`,
        `quantity`,
        `category_id`,
        `image`,
        `description`,
        `status`
    )
    VALUES (
        '$name',
        $price,
        $quantity,
        $category_id,
        '$image',
        '$description',
        '$status'
    )";
    // INSERT INTO `products` (`id`, `name`, `price`, `quantity`, `category_id`, `image`, `description`, `status`)
    //  VALUES (NULL, '$TENMATHANG', '$GIA', '$SOLUONG', '$THELOAI', '$ANH', '$MOTA', '$TRANGTHAI');
    
    
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
    TÊN HÀNG: 
    <input class="form-control" type="text" name="name"> <br>
    GIÁ BÁN : 
    <input class="form-control" type="text" name="price"> <br>
    SỐ LƯỢNG :
     <input class="form-control" type="text" name="quantity"> <br>
    THỂ LOẠI: 
    <select name="category_id" class="form-control">
            <?php foreach( $categories as $category ): ?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach; ?>
        </select> <br>
    IMGAE: 
    <input type="file" name="image" value="<?= $row['image'];?>">   <br>
    MÔ TẢ: 
    <input class="form-control "type="text" name="description"> <br>
    TRẠNG THÁI: 
    <select name="status" class="form-control">
        <option value="0">Tắt</option>
        <option value="1">Bật</option>
    </select> 
    <br>
        <input class="btn btn-primary" type="submit" value="Thêm">
        <a class="btn btn-primary"   href="list.php"> Quay lại </a>
    </form>

</div>
<?php include_once '../footer.php'; ?>