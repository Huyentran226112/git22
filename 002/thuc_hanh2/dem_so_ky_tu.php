<?php
// phit cứng
// $name = "nguyen van cuong";
// $dem="a";
// $count=0;
// for ($i = 0; $i <strlen($name); $i++){
//     if( $name[$i] ==$dem ){
//         $count ++;
//     }
//    }
// echo $count;
// phit mềm
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dem=$_REQUEST['nhap'];
    $name = "nguyen van cuong";
    $count=0;
    for ($i = 0; $i <strlen($name); $i++){
            if( $name[$i] == $dem){
                $count ++;
            }
           }
}
echo " kết quả :".($count);
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
<form method="POST">
    <input type="text" name ="nhap"placeholder="nhập ký tự cần tìm">
    <input type="submit" value="tìm"/><br>
</body>
</html>
