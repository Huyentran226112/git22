<?php
include_once 'db.php';
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
    $sql ="INSERT INTO c10_mat_hang(TENHANG,MACONGTY,MALOAIHANG,GIAHANG) VALUES ( '$TENHANG',$MACONGTY,$MALOAIHANG,$GIAHANG)";
    // var_dump ($sql );
    //  die();
    // thuc hien truy van 
    $conn->exec($sql);
    // chuyen huong ve trang danh sach
    header("Location: list.php");
}


?>
 <form action="" method="post">
 TENHANG :<input type="text" name="TENHANG"> <br>
 MACONGTY: <input type="text" name="MACONGTY"> <br>
 MALOAIHANG: <input type="text" name="MALOAIHANG"> <br>
 GIAHANG: <input type="text" name="GIAHANG"> <br>

 <input type="submit" value="Them">
</form>