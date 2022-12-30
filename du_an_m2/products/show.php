<?php include_once '../db.php'; ?>
<?php
$id =$_GET['id'];
$sql = "SELECT * FROM `products` WHERE 'id' = $id";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$row = $stmt->fetchAll();
// echo '<pre>';
// print_r($books);
// die();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<table border="1">
    <tr>    
        <td> TÊN HÀNG </td>
        <td>  <?php  echo ++$key;?> </td>
    </tr>
    <tr>    
        <td> TÊN HÀNG </td>
        <td>  <?php echo $row['name'];?> </td>
    </tr>
    <tr>
        <td> GIÁ BÁN </td>
        <td> <?php echo $row['price'];?> </td>
    </tr>
    <tr>
        <td> SỐ LƯỢNG </td>
        <td> <?php echo $row['quantity'];?> </td>
    </tr>
    <tr>
        <td> THỂ LOẠI </td>
        <td> <?php echo $row['category_id'];?> </td>
    </tr>
    <tr>
        <td> ẢNH </td>
        <td> <?phpecho $row['image'];?> </td>
    </tr>
    <tr>
        <td> MÔ TẢ </td>
        <td> <?php echo $row['description'];?> </td>
    </tr>
</table>
</div>
<?php include_once '../footer.php'; ?>
