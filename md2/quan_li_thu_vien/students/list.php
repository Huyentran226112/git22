<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT * FROM `students`";
if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $s = trim($s); 
    $sql .= " WHERE name LIKE '%$s%'";
}
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array 
$books = $stmt->fetchAll();
// echo '<pre>';
// print_r($books);
// die();
?>
<?php include_once '../header.php'; ?>
<div class="container-fluid px-4">
<a href="add.php"> Thêm mới </a>
<table border="1" class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>TÊN</th>
            <th>LỚP</th>
            <th>ĐỊA CHỈ</th>
            <th>EMAIL</th>
            <th>ẢNH</th>
            <th>ACTION</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach( $books as $key => $row ): 
            // echo '<pre>';
            // print_r($row);
            // die();
            ?>
            <tr>
                <td> <?php echo ++$key;?> </td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['class'];?></td>
                <td><?php echo $row['address'];?></td>
                <td><?php echo $row['email'];?></td>
                <td><img width="100" src="<?php echo $row['img'];?>" alt=""></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ;?>">Edit</a> <br>
                    <a href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
<?php include_once '../footer.php'; ?>