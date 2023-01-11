<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT products.*,categories.name AS category_name FROM `products` 
JOIN categories ON products.category_id = categories.id";
if( isset( $_GET["s"] )){
    $s = $_GET["s"];
    $s = trim($s); 
    $sql .= " WHERE name LIKE '%$s%'";
}
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$products = $stmt->fetchAll();
// echo '<pre>';
// print_r($books);
// die();
?>
<?php include_once '../header.php'; ?>

<h3>QUẢN LÝ MẶT HÀNG  </h3>
<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="add.php"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>MÃ HÀNG </th>
            <th>TÊN HÀNG</th>
            <th>GIÁ BÁN</th>
            <th>SỐ LƯỢNG</th>
            <th>THỂ LOẠI</th>
            <th>ẢNH</th>
            <th>MÔ TẢ</th>
            <th>TRẠNG THÁI</th>
            <th>ACTION</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach( $products as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo ++$key;?>  </td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo number_format($row['price']);?>VNĐ</td>
                <td><?php echo $row['quantity'];?></td>
                <td><?php echo $row['category_name'];?></td>
                <td> <img  height="150px" width="150px" src="<?= ROOT_URL ?><?php echo $row['image'];?>"></td>
                <td><?php echo $row['description'];?></td>

                <td>
                <?php echo $row['status']== 1 ? "bật" : "tắt"; ?>    
                <?php 
                // if($row['status']== 1){
                //     echo "bật";
                // }else{
                //     echo "tắt";
                // }
                ?>
                </td>
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?= $row['id'] ;?>" >Edit</a>   
                    <a class="btn btn-danger"  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../footer.php'; ?>

