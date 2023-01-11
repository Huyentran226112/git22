<?php include_once '../db.php'; ?>
<?php
$sql = "SELECT books.*,categories.name AS category_name FROM `books` 
JOIN categories ON books.category_id = categories.id";
 if( isset( $_GET["s"] )  ){
    $s = $_GET["s"];
    $s = trim($s); 
    $sql .= " WHERE books.name LIKE '%$s%'";
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
            <th>MÃ SÁCH </th>
            <th>TÊN SÁCH</th>
            <th>GIÁ SÁCH</th>
            <th>LOẠI SÁCH</th>
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
                <td> <?php echo $row['id'];?> </td>
                <td><?php echo $row['name'];?></td>
                <td><?php echo $row['price'];?></td>
                <td><?php echo $row['category_name'];?></td>
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