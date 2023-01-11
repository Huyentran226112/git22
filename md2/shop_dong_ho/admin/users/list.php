<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM `users`";
if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $s = trim($s); 
    $sql .= " WHERE name LIKE '%$s%'";
}
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$users = $stmt->fetchAll();
// echo '<pre>';
// print_r($books);
// die();
?>
<?php include_once '../header.php'; ?> 
<h3>QUẢN LÝ NHÂN VIÊN </h3>
<div class="container-fluid px-4"><br>
<a class="btn btn-primary"   href="add.php"> Thêm mới </a>  
<table border="1" class="table">
    <thead>
        <tr>
            <th>MÃ NHÂN VIÊN  </th>
            <th>HỌ VÀ TÊN </th>
            <th>ĐỊA CHỈ </th>
            <th>NGÀY LÀM VIỆC </th>
            <th>ĐIỆN THOẠI </th>
            <th>EMAIL</th>
            <th>ẢNH</th>
            <th>ACTION</th>
           
        </tr>
    </thead>
    <tbody>
        <?php foreach( $users as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo ++$key;?>  </td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['start_date'];?></td>
                <td><?php echo $row['phone'];?></td>
                <td><?php echo $row['email'];?></td>
                <td> <img  height="150px" width="150px" src="<?= ROOT_URL ?><?php echo $row['image'];?>"></td>
               
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







 

-->