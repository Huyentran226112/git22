<?php
if( $_SERVER['REQUEST_METHOD'] == 'POST' ){
    $so1=$_REQUEST['so1'];
    $so2=$_REQUEST['so2'];
    $tong=$so1+$so2;
    $hieu=$so1-$so2;
    $tich=$so1*$so2;
    // $thương=$so1/$so2;
    $phep_tinh=$_REQUEST['phep_tinh'];
    switch($phep_tinh){
        case 'cong()':
           $error=[];
          if($so2==0|| $so1==0 && $so2==0){
            $error['ngoaile']='lỗi thực thi ';
          }else{
            echo $so1."+".$so2."=".$tong;
          }
        break;
        case 'tru()':
            $error=[];
          if($so2==0|| $so1==0 && $so2==0){
            $error['ngoaile']='lỗi thực thi';
          }else{
            echo $so1."-".$so2."=".$hieu;
          }
          break;
        case 'nhan()':
            $error=[];
            if($so2==0|| $so1==0 && $so2==0){
              $error['ngoaile']='lỗi thực thi';
            }else{
              echo $so1."*".$so2."=".$tich;
            }
        break;
        case 'chia()':
            $error=[];
            if($so2==0|| $so1==0 && $so2==0){
              $error['ngoaile']='lỗi thực thi';
            }else{
              echo $so1."/".$so2."=".$so1/$so2;
            }
        break;
        
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
    may tinh :<br>
    nhap so thu nhat :
    <input type="text" name="so1" value=""><br>
    nhap so thu hai:
        <input type="text" name="so2" value=""><br>
    lua chon phep tinh:    
<select name="phep_tinh">
    <option value="cong()">+</option>
    <option value="tru()">-</option>
    <option value="nhan()">*</option>
    <option value="chia()">/</option>
</select>
  <input type="submit" value="tinh "/><br>
  <span><?php if(isset($error['ngoaile'])){echo $error['ngoaile'];} ?></span>
</body>
</html>