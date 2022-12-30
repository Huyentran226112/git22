<?php include_once '../db.php'; ?>
<?php
$id = $_GET['id'];
    $sql = "SELECT * FROM `products` WHERE id = $id";
    //debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $row = $stmt->fetch();

    $sql = "SELECT * FROM `categories`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
    $categories = $stmt->fetchAll();

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
        $price  = $_REQUEST['price'];
        $quantity = $_REQUEST['quantity'];
        $category_id = $_REQUEST['category_id'];
        $image = '';
        // nếu người dùng uploat file và file ko bị lỗi
        if (isset($_FILES['image']) && !$_FILES['image']['error'])
        {
            move_uploaded_file($_FILES['image']['tmp_name'], ROOT_DIR.'/public/uploads/'.$_FILES['image']['name']);
            $image = '/public/uploads/'.$_FILES['image']['name'];
        }
        $description = $_REQUEST['description'];
        $status = $_REQUEST['status'];
      

        // Viet cau truy van
        $sql = "UPDATE products SET
                name = '$name',
                price = '$price',
                quantity = '$quantity',
                category_id = '$category_id',
                image = '$image',
                description = '$description',
                status = '$status'
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
<form action="" method="post" enctype ="multipart/form-data">
    TÊN MẶT HÀNG : 
    <input class="form-control" type="text" name="name"> <br>
    GIÁ BÁN :  
    <input class="form-control" type="text" name="price"> <br>
    SỐ LƯỢNG :   
    <input class="form-control" type="text" name="quantity "> <br>
    THỂ LOẠI: 
    <select name="category_id" class="form-control">
            <?php foreach( $categories as $category ): ?>
            <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
            <?php endforeach; ?>
        </select> <br>
    ẢNH: <input type="file" name="image" value="<?= $row['image'];?>"> <br>
    MÔ TẢ:  <input class="form-control" type="text" name="description "> <br>
    TRẠNG THÁI : 
    <select name="status" class="form-control">
        <option value="0">Tắt</option>
        <option value="1">Bật</option>
    </select>   
    <br>
    <input class="btn btn-primary" type="submit" value="Thêm">
    <a class="btn btn-primary" href="list.php"> Quay lại </a>
</form>
</div>
<?php include_once '../footer.php'; ?>
