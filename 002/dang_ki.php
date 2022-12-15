<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name=$_REQUEST['ten'];
    $age=$_REQUEST['tuoi'];
    $string=file_get_contents('users.json');
    $data = json_decode($string,true);
    $newItem=[
        'name'=> $name,
        'age'=>$age
    ];
    array_push($data,$newItem);
    $string = json_encode($data);
    file_put_contents('users.json',$string);
    header('location:danh_sach.php');
    die();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <input type="text" name="ten" placeholder="vui lòng nhập tên "><br><br>
    <input type="text" name="tuoi"placeholder="vui lòng nhập tuổi "><br><br>
    <input type="submit" value="đăng kí">
</form>
</body>
</html>

