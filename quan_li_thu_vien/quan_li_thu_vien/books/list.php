<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT c10_mat_hang.*,c10_loaihang.TENLOAIHANG FROM `c10_mat_hang` 
JOIN c10_loaihang ON c10_mat_hang.MALOAIHANG = c10_loaihang.MALOAIHANG";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$books = $stmt->fetchAll();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<a href="add.php"> Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>MAHANG</th>
            <th>TENHANG</th>
            <th>GIAHANG</th>
            <th>TENLOAIHANG</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $books as $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo $row['MAHANG'];?> </td>
                <td><?php echo $row['TENHANG'];?></td>
                <td><?php echo $row['GIAHANG'];?></td>
                <td><?php echo $row['TENLOAIHANG'];?></td>
                <td>
                    <a href="edit.php?id=<?= $row['MAHANG'] ;?>">Edit</a> <br>
                    <a href="delete.php?id=<?= $row['MAHANG'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../footer.php'; ?>