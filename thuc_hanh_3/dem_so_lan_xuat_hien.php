<?php
// phit cung
// $number= [2,5,8,16,23,38,56,72,91,5,23,72];
// $valuer=5;
// $count=0;
// foreach($number as $key => $value){
//     if($valuer==$value){
//         $count+=1;
//     }
// }
// echo $count;
// phit mem
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valuer=$_REQUEST['nhap'];
     $number= [2,5,8,16,23,38,56,72,91,5,23,72];
     $count=0;
foreach($number as $key => $value){
    if($valuer==$value){
        $count+=1;
    }
}
echo $count;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>đếm số lần xuất hiện</title>
</head>
<body>
<form method="POST">
    <input type="text" name ="nhap"placeholder="nhập ký tự cần tìm">
    <input type="submit" value="tìm"/><br>
</body>
</html>