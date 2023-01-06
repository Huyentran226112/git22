<?php
    include_once 'db.php';//$conn
    $sql = "SELECT c10_mat_hang.* ,c10_loaihang.TENLOAIHANG FROM `c10_mat_hang` 
    JOIN c10_loaihang ON c10_mat_hang.MALOAIHANG=c10_loaihang.MALOAIHANG";
    // đoạn mã bắt buộc 
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array => object
    $rows = $stmt->fetchAll();

    //
    ?>
    <a href="add.php"> Thêm mới </a>
<table border="1">
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
        <?php foreach( $rows as $row ): 
            //  echo "<pre>";
            //  print_r($row);
            //  die();
             ?>
            <tr>
                <td><?php echo $row['MAHANG'];?> </td>
                <td><?php echo $row['TENHANG'];?> </td>
                <td><?php echo $row['GIAHANG'];?> </td>
                <td><?php echo $row['TENLOAIHANG'];?></td>
                <td>
                <a href="edit.php?id=<?= $row['MAHANG'] ;?>">Edit</a> <br>
                <a href="delete.php?id=<?= $row['MAHANG'] ;?>">Delete</a>
                </td>
                
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>