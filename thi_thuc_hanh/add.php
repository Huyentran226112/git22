<?php
include_once 'db.php';

$sql = "SELECT * FROM `student`";
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array
$student = $stmt->fetchAll();
// xu li 
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    // echo '<pre>';
    // print_r( $_REQUEST );
    // echo '</pre>';
    $name = $_REQUEST['name'];
    $class_id = $_REQUEST['class_id'];
    $brith = $_REQUEST['brith'];
    $gender = $_REQUEST['gender'];
    $information = $_REQUEST['information'];

    $sql ="INSERT INTO student(`name`,`class_id`,`brith`,`gender`,`information`)
     VALUES ( '$name',$class_id,'$brith','$gender','$information')";
    // var_dump ($sql );
    //  die();
    // thuc hien truy van 
    $conn->exec($sql);
    // chuyen huong ve trang danh sach
    header("Location: list.php");
}


?>
 <form action="" method="post">
 TÊN HỌC SINH :<input type="text" name="name" > <br>
 LỚP:<select name="class_id" class="form-control">
            <?php foreach ($student as $st) :?>
                <option value="<?php echo $st['id'];?>"><?php echo $st['class_id'];?></option>
            <?php endforeach; ?>
    </select><br>
NGÀY SINH :<input type="date" name="brith"> <br>
GIỚI TÍNH:  <select name="gender" class="form-control">
        <option value="0">nam</option>
        <option value="1">nữ</option>
        </select> 
        <br>
THÔNG TIN :<input type="text" name="information"> <br>
 <input type="submit" value="Them">
 <a href="list.php">Thoát</a>
</form>
