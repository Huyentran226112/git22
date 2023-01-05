<?php include_once '../db.php'; ?>
<?php
// Lay toan bo the loai
$sql = "SELECT * FROM `categories`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$categories = $stmt->fetchAll();
$error = [];
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

    // xac thuc du lieu
    if($name == ""){
        $error['name'] = 'Bạn chưa nhập tên';
    }
    if($price == ""){
        $error['price'] = 'Bạn chưa nhập giá';
    }
    if($quantity == ""){
        $error['quantity'] = 'Bạn chưa nhập số lượng ';
    }
    if($description == ""){
        $error['description'] = 'Bạn chưa nhập mô tả  ';
    }
    // in lỗi
    // echo '<pre>';
    // print_r( $error );
    // die();

    // nếu người dùng uploat file và file ko bị lỗi
    if (isset($_FILES['image']) && !$_FILES['image']['error'])
    {
        move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['name']);
        $image = '/public/uploads/'.$_FILES['image']['name'];
    }

    // Lưu dữ liệu
    if ( count($error) == 0 ){
        // Viet cau truy van
        $sql = "INSERT INTO products(
            `name`,
            `price`,
            `quantity`,
            `category_id`,
            `description`,
            `image`,
            `status`
        )
        VALUES (
            '$name',
            $price,
            $quantity,
            $category_id,
            '$description',
            '$image',
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

    
} 
?>
<?php include_once '../header.php'; ?>
<h3>Thêm mới mặt hàng </h3>
<div class="container-fluid px-4">
    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label class="form-label" >TÊN HÀNG: </label>
            <input class="form-control" type="text" name="name">
            <div class="text-danger"> <?php echo isset($error['name']) ? $error['name'] : ''; ?> </div>
        </div>
    <div class="mb-3">
            <label class="form-label" >GIÁ BÁN : </label>
            <input class="form-control" type="text" name="price">
            <div class="text-danger"> <?php echo isset($error['price']) ? $error['price'] : ''; ?> </div>
        </div>
    <div class="mb-3">
            <label class="form-label" >   SỐ LƯỢNG : </label>
            <input class="form-control" type="text" name="quantity">
            <div class="text-danger"> <?php echo isset($error['quantity']) ? $error['quantity'] : ''; ?> </div>
        </div>
    
    THỂ LOẠI: 
    <select name="category_id" class="form-control">
            <?php foreach( $categories as $category ): ?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach; ?>
        </select> <br>
    IMGAE: 
    <input type="file" name="image" value="<?= $row['image'];?>">   <br>
    
    <div class="mb-3">
            <label class="form-label" >   MÔ TẢ: </label>
            <input class="form-control" type="text" name="description">
            <div class="text-danger"> <?php echo isset($error['description']) ? $error['description'] : ''; ?> </div>
        </div>
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