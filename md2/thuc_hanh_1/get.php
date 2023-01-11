<?php

echo '<pre>';
print_r($_REQUEST);
echo '</pre>';


if( isset($_REQUEST['username'])&& isset($_REQUEST['password'])){
    //  in ra du lieu gui len
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
    // memory
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];
    // kiem tra du lieu duoc luu vao bo nho 
    var_dump($username );
    var_dump($password );
    //  xu li 
    if ( $username=='admin'&& $password== '123'){
        // xuat
        echo 'xin chao adim';
    }else{
        // xuat
        echo 'chao ban da dang nhap he thong ';
    }



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
    <form action="" method="POST">
        Username: <input type="text" name="username" id=""> <br>
        Password: <input type="password" name="password" id=""><br>
        <input type="submit" value="gui">
    </form>
</body>
</html>