<?php
    include_once 'db.php';//$conn
    // echo '<pre>';
    // print_r($_GET);
    // die();
    $sql = "SELECT * FROM `class`";
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
    $student = $stmt->fetchAll();
    //Lay gia tri ID tren URL
    $id = $_GET['id'];
    //lay du lieu theo ID
    $sql = "SELECT * FROM `student` WHERE id = $id";
    //Debug sql
    // var_dump($sql);
    $stmt = $conn->query($sql);
    $stmt->setFetchMode(PDO::FETCH_ASSOC);//array
    //Lấy về dữ liệu duy nhat
    $row = $stmt->fetch();
    //  echo '<pre>';
    // print_r($row);
    // die();
    //Xu ly form
    if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
        // echo '<pre>';
        // print_r( $_REQUEST );
        // die();
        $name = $_REQUEST['name'];
        $class_id = $_REQUEST['class_id'];
        $brith = $_REQUEST['brith'];
        $gender = $_REQUEST['gender'];
        $information = $_REQUEST['information'];
        //Viet cau truy van
        $sql = "UPDATE student SET
                name = '$name',
                class_id = $class_id,
                brith = '$brith',
                gender = '$gender',
                information = '$information'
                WHERE id = $id
        ";
        //Debug sql
        // var_dump($sql);
        // die();
        //Thuc hien truy van
        $conn->exec($sql);
        //Chuyen huong
        header("Location: list.php");
    }
?>
<form action="" method="post">
    Tên Học Sinh :<input type="text" name="name" value ="<?= $row['name'];?>"> <br>
    Lớp:<select name="class_id" class="form-control" id="">
            <?php foreach ($student as $st) {?>
            <option <?= $st['id'] == $row['class_id'] ? "selected" : "" ?> value="<?=$st['id'];?>"><?=$st['id'];?></option>
            <?php } ?>
    </select><br>
    Ngày Sinh: <input type="date" name="brith" value ="<?= $row['brith'];?>"> <br>
    Giới Tính: <select name="gender" id="">
                <option name="gender" value="<?= $row['gender'];?>">Nam</option>
                <option name="gender" value="<?= $row['gender'];?>">Nữ</option>
    </select><br>
    Thông Tin: <input type="text" name="information" value ="<?= $row['information'];?>"> <br>
    <input type="submit" value="Them">
    <a href="list.php">Thoát</a>
</form>