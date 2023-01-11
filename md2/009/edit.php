<?php 
include_once 'db.php';//$conn
// echo '<pre>';
// print_r ($_GET);
// die();
$id = $_GET['id'];
// var_dump ($id);
$sql ="SELECT * FROM `c10_mat_hang` WHERE MAHANG= $id";
// debug
// var_dump ($sql);
$stmt = $conn->query($sql);
$stmt->setFetchMode(PDO::FETCH_ASSOC);//array => object
// lấy về dữ liệu duy nhất 
$row = $stmt->fetch();
// echo '<pre>';
// print_r ($row);
// die();
// kiem tra

// xu li 
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    // echo '<pre>';
    // print_r( $_REQUEST );
    // echo '</pre>';
    $TENHANG = $_REQUEST['TENHANG'];
    $MACONGTY = $_REQUEST['MACONGTY'];
    $MALOAIHANG = $_REQUEST['MALOAIHANG'];
    $GIAHANG = $_REQUEST['GIAHANG'];
    // viet cau truy van  
    // $sql ="INSERT INTO c10_mat_hang(TENHANG,MACONGTY,MALOAIHANG,GIAHANG) VALUES ( '$TENHANG',$MACONGTY,$MALOAIHANG,$GIAHANG)";
    
    // thuc hien truy van 
    $sql = "UPDATE c10_mat_hang SET
            TENHANG = '$TENHANG',
            MACONGTY = $MACONGTY,
            MALOAIHANG =  $MALOAIHANG,
            GIAHANG =  $GIAHANG
            WHERE MAHANG = $id
            ";
    // debug
    // var_dump ($sql );
    //  die();
    $conn->exec($sql);
    // chuyen huong ve trang danh sach
    header("Location: list.php");
}

?>
 <form action="" method="post">
 TENHANG :<input type="text" name="TENHANG" value="<?=$row['TENHANG'];?>"> <br>
 MACONGTY: <input type="text" name="MACONGTY" value="<?=$row['MACONGTY'];?>"> <br>
 MALOAIHANG: <input type="text" name="MALOAIHANG" value="<?=$row['MALOAIHANG'];?>"> <br>
 GIAHANG: <input type="text" name="GIAHANG" value="<?=$row['GIAHANG'];?>"> <br>
 <input type="submit" value="Them">
</form>