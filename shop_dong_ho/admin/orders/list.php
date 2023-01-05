<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM `orders`";
if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $s = trim($s); 
    $sql .= " WHERE cutstomer_name LIKE '%$s%'";
}
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$orders = $stmt->fetchAll();
// echo '<pre>';
// print_r($orders);
// die();
?>
<?php include_once '../header.php'; ?>
<h3>QUẢN LÝ ĐƠN HÀNG</h3>
<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="add.php"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>MÃ ĐƠN HÀNG</th>
            <th>NGÀY ĐẶT HÀNG </th>
            <th>TỔNG TIỀN </th>
            <th>TÊN KHÁCH HÀNG </th>
            <th>SỐ ĐIỆN THOẠI  </th>
            <th>ĐỊA CHỈ </th>
            <th>ACTION </th>

    
        </tr>
    </thead>
    <tbody>
        <?php foreach( $orders as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo ++$key;?>  </td>
                <td><?php echo $row['order_date'];?></td>
                <td>   <?php echo number_format($row['total']);?>VNĐ</td>
                <td><?php echo $row['cutstomer_name'];?></td>
                <td><?php echo $row['cutstomer_phone'];?></td>
                <td><?php echo $row['cutstomer_address'];?></td>
               
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

