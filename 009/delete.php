<?php
include_once 'db.php';

// echo '<pre>';
// print_r( $_REQUEST );
// echo '</pre>';
// lấy giá trị 
$id = $_GET['id'];
// var_dump($id);
// die();

$sql = "DELETE FROM c10_mat_hang  WHERE MAHANG = $id";
// var_dump( $sql);
// / die();
// thuc hien truy van 
$conn->exec($sql);
// chuyen huong ve trang danh sach
header("Location: list.php");