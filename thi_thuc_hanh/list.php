<?php
    include_once 'db.php';//$conn
    $sql = "SELECT student.* ,class.name2 FROM `student` 
    JOIN class ON student.class_id=class.id";
    if( isset( $_GET["s"] )){
        $s = $_GET["s"];
        $s = trim($s); 
        $sql .= " WHERE name LIKE '%$s%'";
    }
    // đoạn mã bắt buộc 
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array => object
    $student = $stmt->fetchAll();
    ?>
<form action="">
    <div class="input-group">
        <input name="s" type="text" class="form-control" placeholder="Search for products">
        <div class="input-group-append">
            <button  type="submit"  class="input-group-text bg-transparent text-primary">tìm
                <i class="fa fa-search"></i>
            </button>
        </div>
    </div>
</form>
    <a href="add.php"> Thêm mới </a>
<table border="1">
    <thead>
        <tr>
            <th> MÃ HỌC SINH </th>
            <th>TÊN HỌC SINH </th>
            <th>LỚP</th>
            <th>NGÀY SINH </th>
            <th>GIỚI TÍNH </th>
            <th>THÔNG TIN  </th>
            <th>CHỈNH SỬA </th>
        </tr>
       
    </thead>
    <tbody>
        <?php foreach( $student as $key => $row ): 
            //  echo "<pre>";
            //  print_r($row);
            //  die();
             ?>
            <tr>
                 <td> <?php echo ++$key;?>  </td>
                <td><?php echo $row['name'];?> </td>
                <td><?php echo $row['class_id'];?> </td>
                <td><?php echo $row['brith'];?> </td>
                <td><?php echo $row['gender'];?></td>
                <td><?php echo $row['information'];?></td>
                <td>
                <a href="edit.php?id=<?= $row['id'] ;?>">Edit</a> <br>
                <a class="btn btn-danger"  onclick="return confirm('Bạn có chắc chắn muốn xóa không?')" href="delete.php?id=<?= $row['id'] ;?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>