<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM `the_loai`";
if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $s = trim($s); 
    $sql .= " WHERE ten LIKE '%$s%'";
}
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$the_loai = $stmt->fetchAll();
?>
<?php include_once '../header.php'; ?>
<h3>QUẢN LÝ THỂ LOẠI </h3>
<div class="container-fluid px-4">
<a class="btn btn-primary" href="add.php"> Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>TÊN THỂ LOẠI</th>
            <th>ACTION</th>
           
        </tr>
    </thead>
    <tbody>
    <?php foreach( $the_loai as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo ++$key;?>  </td>
                <td><?php echo $row['ten'];?></td>
               
                <td>
                    <a class="btn btn-warning" href="edit.php?id=<?= $row['id'] ;?>">Edit</a>
                    <a  class="btn btn-danger" onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../footer.php'; ?>