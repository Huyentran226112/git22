<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT danh_sach.*,the_loai.ten AS gioi_tinh_id FROM `danh_sach` 
JOIN the_loai ON danh_sach.gioi_tinh_id = the_loai.id";
 if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $s = trim($s); 
    $sql .= " WHERE danh_sach.ten LIKE '%$s%'";
}
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$danh_sach = $stmt->fetchAll();
// echo '<pre>';
// print_r($danh_sach);
// die();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<a href="add.php"> Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>MÃ HỌC SINH </th>
            <th>TÊN HỌC SINH </th>
            <th>LỚP</th>
            <th>NGÀY SINH </th>
            <th>GIỚI TÍNH </th>
            <th>THÔNG TIN </th>
            <th>ACTION </th>
            
        </tr>
    </thead>
    <tbody>
        <?php foreach( $danh_sach as $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo $row['id'];?> </td>
                <td><?php echo $row['ten '];?></td>
                <td><?php echo $row['lop'];?></td>
                <td><?php echo $row['ngay_sinh'];?></td>
                <td><?php echo $row['gioi_tinh_id'];?></td>
                <td><?php echo $row['thong_tin_hoc_sinh'];?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a onclick="myFunction()" href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>

<?php include_once '../footer.php'; ?>