<?php
// phit cứng 
// $number=[ 10,6,7,8,2];
// $x=7;
// for($i=0;$i<count($number);$i++){
//     if($number[$i]==$x){
//         unset($number[$i]);
//     }
// }
// echo '<pre>';
// print_r($number);
// echo '</pre>';
// *******
// phít mềm 
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dem=$_REQUEST['nhap'];
    $number=[ 10,6,7,8,2];
    for($i=0;$i<count($number);$i++){
            if($number[$i]==$dem){
                unset($number[$i]);
            }
        }
}
echo '<pre>';
print_r($number);
echo '</pre>';
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
    <input type="text" name ="nhap"placeholder="nhập số muốn xóa ">
    <input type="submit" value="add"/><br>
</body>
</html>

