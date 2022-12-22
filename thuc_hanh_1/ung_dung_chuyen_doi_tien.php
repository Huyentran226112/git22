<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nhap=$_POST['USD'];
    $tigia=23000;
    // echo $nhap;
    $VND=$nhap*$tigia;
    echo "Số tiền sau quy đổi: ".$VND."VND";
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
    <form method="post">
    <input type="text" name="USD" placeholder= 'nhap so tien can doi'>
    <input type="submit" value="doi"/>
    </form>
</body>
</html>