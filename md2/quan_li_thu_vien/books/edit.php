<?php include_once '../db.php'; ?>
<?php
// Lay toan bo the loai
$sql = "SELECT * FROM `categories`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$categories = $stmt->fetchAll();

$id = $_GET['id'];
$sql = "SELECT * FROM `books` WHERE id = $id";
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
        $MASACH = $_REQUEST['id'];
        $TENSACH = $_REQUEST['name'];
        $GIASACH= $_REQUEST['price'];
        $LOAISACH = $_REQUEST['category_id'];
        // Viet cau truy van
        $sql = "UPDATE books SET
                name = '$TENSACH',
                price = $GIASACH,
                category_id = $LOAISACH
                WHERE id = $MASACH
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
<form action="" method="post">
    MASACH :<input type="text" name="id" value="<?= $row['id'];?>"> <br>
    TENSACH: <input type="text" name="name" value="<?= $row['name'];?>"> <br>
    GIASACH: <input type="text" name="price" value="<?= $row['price'];?>"> <br>
    LOAISACH:<select name="category_id" class="form-control">
        <?php foreach( $categories as $category ): ?>
        <option value="<?php echo $category['id'];?>"><?php echo $category['name'];?></option>
        <?php endforeach; ?>
    </select>
    
    <br>
    <input type="submit" value="thêm">
</form>
</div>
<?php include_once '../footer.php'; ?>

